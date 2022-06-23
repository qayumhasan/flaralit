function friendbuyVisitorStatus(axios) {
  if (window['friendbuy']) {
    window['friendbuy'].push(['invoke', 'visitor_status',
      function (response) {
        var data = {};
        for (var entry of Object.entries(response)) {
          if (typeof(entry[1]) === 'object') {
            data[entry[0]] = JSON.stringify(entry[1]);
          } else {
            data[entry[0]] = entry[1];
          }
        }

        var visitorStatusCallback = function(response) {
          if (response['id']) {
            if (typeof window.vueAPI !== 'undefined') {
              window.vueAPI.showModal('friendbuy-create-account', { props: { onClickClose: vueAPI.closeModal } });
            }
          }
        };

        if (response['friendbuy_click'] !== "none" && response['self_referred'] === false) {
          if (typeof makeAjaxCall === 'undefined') {
              const formData = Object.keys(data).reduce((formData, key) => {
                  formData.append(key, data[key]);
                  return formData;
              }, new FormData());

              axios({
                data: formData,
                method: 'post',
                url: '/referrals/ajax/friend-reward/',
                withCredentials: true,
                headers: { 'Content-Type': 'multipart/form-data' },
              }).then(({ data }) => visitorStatusCallback(data));
          } else {
              makeAjaxCall("POST", "/referrals/ajax/friend-reward/", data, visitorStatusCallback);
          }
        }
      }
    ]);
  }
}

function friendbuyRewardConfirmation(axios) {
  if (typeof window.vueAPI !== 'undefined') {
    window.vueAPI.showModal('friendbuy-thank-you', { props: { onClickClose: vueAPI.closeModal } });

    if (axios) {
      axios.post('/api/sessions/current/unset_referrals_friend_reward_confirmation/');
    }
  }
}

window.friendbuyVisitorStatus = friendbuyVisitorStatus;
window.friendbuyRewardConfirmation = friendbuyRewardConfirmation;
