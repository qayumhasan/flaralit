<div class="container">
    <div class="row">
        <div class="col-sm-2 text-center">
            <img width="130" height="20" alt="footer logo"
                src="{{ static_asset('assets/frontend/assets/images/logo2.png') }}" class="sumo-footer-logo mb-3">
            <p class="sumo-footer-text">
                Part of the <a href="#">Sumo</a>
                family with <a href="#">SendFox</a> and
                <a href="#">KingSumo</a>
            </p>
        </div>
        <div class="col-sm-3 offset-sm-1">
            <h4 class="h5">Account</h4>
            <ul class="sumo-footer-links list-group">
                <li><a href="#">Account</a></li>
                <li><a href="{{ route('plus') }}">Join Plus</a></li>
            </ul>
        </div>
        <div class="col-sm-3">
            <h4 class="h5">Support</h4>
            <ul class="sumo-footer-links list-group">
                <li><a href="#" target="_blank" rel="noopener">Help center</a></li>
                <li><a href="#" target="_blank" rel="noopener">Terms</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </div>
        <div class="col-sm-3">
            <h4 class="h5">Grandfatheredly</h4>
            <ul class="sumo-footer-links list-group">
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('blogs') }}" target="_blank" rel="noopener">Blog</a></li>
                <li><a href="{{ route('career') }}">Careers</a></li>
                <li><a href="#">Affiliates</a></li>
                <li><a href="#" target="_blank">Swag</a></li>
            </ul>
        </div>
    </div>
</div>