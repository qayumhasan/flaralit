@extends('frontend.layouts.master')
@push('style')
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/meettheteam.css') }}">
@endpush
@section('content')
    <div class="about-banner team-member-banner wf-section">
        <div class="container-12 w-container">
            <div class="banner-content">
                <div class="banner-heading">
                    <h2 class="ab-h2">Meet the <span class="text-span-23 text-w">team</span></h2><img
                            src="https://assets.website-files.com/615b54e9eebdbb6f52457d5b/61b6cc5de7c28e28abf099cb_Vector 34.svg"
                            loading="lazy" alt="" class="image-118 tm-im c-line" />
                </div>
            </div>
            <div class="text-block-37">This is our team, a lot of smiling happy<br />people who work hard to empower
                your teams.</div>
        </div>
    </div>
    <div class="about-team-section team-memb-ab-sec wf-section">
        <div class="container-12 w-container">
            <div data-current="Tab 1" data-easing="ease-in" data-duration-in="300" data-duration-out="100"
                 class="w-tabs">
                <div class="tabs-menu-2 w-tab-menu"><a data-w-tab="Tab 1"
                                                       class="tab-link w-inline-block w-tab-link w--current">
                        <div>All</div>
                    </a><a data-w-tab="Tab 2" class="tab-link w-inline-block w-tab-link">
                        <div>Leadership</div>
                    </a><a data-w-tab="Tab 3" class="tab-link w-inline-block w-tab-link">
                        <div>Marketing</div>
                    </a><a data-w-tab="Tab 4" class="tab-link w-inline-block w-tab-link">
                        <div>HR</div>
                    </a><a data-w-tab="Tab 5" class="tab-link w-inline-block w-tab-link">
                        <div>Product &amp; Engineering</div>
                    </a><a data-w-tab="Tab 6" class="tab-link w-inline-block w-tab-link">
                        <div class="text-block-46">Business Development</div>
                    </a><a data-w-tab="Tab 7" class="tab-link w-inline-block w-tab-link">
                        <div>Partner &amp; Customer Experience</div>
                    </a><a data-w-tab="Tab 8" class="tab-link w-inline-block w-tab-link">
                        <div>Operations</div>
                    </a></div>
                <div class="w-tab-content">
                    <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                        <div>
                            <div class="collection-list-wrapper w-dyn-list">
                                <div role="list" class="w-dyn-items w-row">
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="{{ static_asset('assets/frontend/assets/images/250x250.png') }}"
                                                                     alt="" />
                                            <h4 class="heading-47">Olman Quesada</h4>
                                            <div class="text-block-41">Head of Revenue</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="{{ static_asset('assets/frontend/assets/images/250x250.png') }}"
                                                                     alt="" />
                                            <h4 class="heading-47">Katelyn Deibert</h4>
                                            <div class="text-block-41">Partner Success Associate</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="{{ static_asset('assets/frontend/assets/images/250x250.png') }}"
                                                                     alt="" />
                                            <h4 class="heading-47">Jessica Baltzersen</h4>
                                            <div class="text-block-41">Email Marketing Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="{{ static_asset('assets/frontend/assets/images/250x250.png') }}"
                                                                     alt="" />
                                            <h4 class="heading-47">Chad Boyda</h4>
                                            <div class="text-block-41">Chief Technology Officer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="{{ static_asset('assets/frontend/assets/images/250x250.png') }}"
                                                                     alt="" />
                                            <h4 class="heading-47">Andrew Church</h4>
                                            <div class="text-block-41">Customer Support Specialist</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="{{ static_asset('assets/frontend/assets/images/250x250.png') }}"
                                                                     alt="" />
                                            <h4 class="heading-47">Taylor Wallace</h4>
                                            <div class="text-block-41">Creative Project Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="{{ static_asset('assets/frontend/assets/images/250x250.png') }}"
                                                                     alt="" />
                                            <h4 class="heading-47">Bennett Rofsky</h4>
                                            <div class="text-block-41">Launch Operations Domain Lead</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="{{ static_asset('assets/frontend/assets/images/250x250.png') }}"
                                                                     alt="" />
                                            <h4 class="heading-47">Jordan White</h4>
                                            <div class="text-block-41">Sr. Video Editor</div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Tab 2" class="w-tab-pane">
                        <div>
                            <div class="collection-list-wrapper w-dyn-list">
                                <div role="list" class="w-dyn-items w-row">
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b88f039d2db8d8bf64572c_Sean-stubbs.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Seann Stubbs</h4>
                                            <div class="text-block-41">Head of Self Listing Operations</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b884911c14e403f88d11e2_Ayman%20Al-Abdullah.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Ayman Al-Abdullah</h4>
                                            <div class="text-block-41">Special Advisor</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b83a43328cef3bedd0ecb4_chad.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Chad Boyda</h4>
                                            <div class="text-block-41">Chief Technology Officer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b839cc17b4422cb4a19d25_llona.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Ilona Abramova</h4>
                                            <div class="text-block-41">VP of Operations</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b8396bfad1db015300c81f_Nick%20Christensen.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Nick Christensen</h4>
                                            <div class="text-block-41">Head of Marketing</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61d647b49d24da8def8c4317_noah-blob-lo.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Noah Kagan</h4>
                                            <div class="text-block-41">CEO</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b8844245b572923ae4f69f_olo.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Olman Quesada</h4>
                                            <div class="text-block-41">Head of Revenue</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b884286e1160303a38cfb5_vanessa.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Vanessa Yepes</h4>
                                            <div class="text-block-41">Head of Select Operations</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61ce58d865c416a0f4c74171_kevin-blob.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Kevin Zhou</h4>
                                            <div class="text-block-41">Senior Director of Finance</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Tab 3" class="w-tab-pane">
                        <div>
                            <div class="collection-list-wrapper w-dyn-list">
                                <div role="list" class="w-dyn-items w-row">
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61ce5287002f4dc199ae30f8_victor-blob.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Victor Pope</h4>
                                            <div class="text-block-41">Editor</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61d64ced6669d554352c45d3_camille-blob-lo.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Camille Christie</h4>
                                            <div class="text-block-41">Email Marketing Designer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c5778838a91a07ad9a67db_Max%20Lin.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Max Lin</h4>
                                            <div class="text-block-41">Director of Content Marketing</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c57664d3e6206d11ecc47f_Sarabeth%20Lewis.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Sarabeth Lewis</h4>
                                            <div class="text-block-41">Senior Content Designer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c575da2154e34c6c436850_Emily%20Steveson.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Emily Steveson</h4>
                                            <div class="text-block-41">Affilate Support Specialist</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c5751c24930d75a7156576_Michelle%20Williams.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Michelle Williams</h4>
                                            <div class="text-block-41">Senior Paid Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61d649a7bf92e378a7b0aff5_crystal-blob-lo.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Crystal Grover</h4>
                                            <div class="text-block-41">Partnerships Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c5723838a91ab4d69a4e88_A-.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Jay Stephens</h4>
                                            <div class="text-block-41">Video Producer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c571ba8e29b079b245dc8f_Jessica%20Baltzersen.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Jessica Baltzersen</h4>
                                            <div class="text-block-41">Email Marketing Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c5717738a91a8f959a4d24_Lyndsay%20Hall.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Lyndsay Hall</h4>
                                            <div class="text-block-41">Video Project Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61d643ad6669d559a32c16cf_km-blob-lo.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Kellyn McCarthy</h4>
                                            <div class="text-block-41">Senior Digital Project Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56ef20c499c9f6f701965_Happy%20Lee.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Happy Lee</h4>
                                            <div class="text-block-41">Partner Paid Ads Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56cc3a8f0be02291fad57_Jordan%20White.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Jordan White</h4>
                                            <div class="text-block-41">Sr. Video Editor</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56c97d3e6205b53ec9c1e_Evan%20Walker.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Evan Walker</h4>
                                            <div class="text-block-41">Marketing Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56c6fff1fed334352af0d_Amanda%20Dodson.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Amanda Hall</h4>
                                            <div class="text-block-41">Influencer Marketing Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61ca40c7bece615e8e889bf6_chris-g-blob-2.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Chris Grullon</h4>
                                            <div class="text-block-41">Director of Email Marketing</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b8396bfad1db015300c81f_Nick%20Christensen.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Nick Christensen</h4>
                                            <div class="text-block-41">Head of Marketing</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61ce5b7264d162509c103741_jeir-blob.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Jeir Lazo</h4>
                                            <div class="text-block-41">Creative Director</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b8920d17b442503da3f5fc_Mitchell-robinson.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Mitchell Cohen</h4>
                                            <div class="text-block-41">Influencer Marketing Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b890cc4b54ef5eaf2614c0_celeste.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Celeste Hylton-James</h4>
                                            <div class="text-block-41">Senior Designer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b83a123613d159cb0957d8_Chris%20Schelzi.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Chris Schelzi</h4>
                                            <div class="text-block-41">Head of Growth</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b8900ec0b465157829fcdd_Dean-wade.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Dean Yeong</h4>
                                            <div class="text-block-41">Blog and SEO Manager</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Tab 4" class="w-tab-pane">
                        <div>
                            <div class="collection-list-wrapper w-dyn-list">
                                <div role="list" class="w-dyn-items w-row">
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61ce58d865c416a0f4c74171_kevin-blob.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Kevin Zhou</h4>
                                            <div class="text-block-41">Senior Director of Finance</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c5780542a9e1a7bf8b0820_Madison%20Kislingbury.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Madison Kislingbury</h4>
                                            <div class="text-block-41">HR Coordinator</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c574087e0aeb4b3a5179c0_Charlotte%20Johnston.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Charlotte Johnston</h4>
                                            <div class="text-block-41">People and Culture Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c57365a561fd2ba50572c6_Kevin%20Montera.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Kevin Montera</h4>
                                            <div class="text-block-41">Accounting Associate</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56f8738a91a05629a4385_Jess%20Hyder.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Jess Hyder</h4>
                                            <div class="text-block-41">Senior Accountant</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Tab 5" class="w-tab-pane">
                        <div>
                            <div class="collection-list-wrapper w-dyn-list">
                                <div role="list" class="w-dyn-items w-row">
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b83a43328cef3bedd0ecb4_chad.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Chad Boyda</h4>
                                            <div class="text-block-41">Chief Technology Officer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c5715326c5118018c0b0df_Luke%20Francis.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Austin Lindenberg</h4>
                                            <div class="text-block-41">Software Engineer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c571946fb8d8b1793df5ab_Lawrence%20Chan.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Lawrence Chan</h4>
                                            <div class="text-block-41">Project Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c571da0c499c2e8870316c_Jake%20Lundkovsky.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Jake Lundkovsky</h4>
                                            <div class="text-block-41">Software Engineer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c5725f868d4a343594349b_Marnie%20Tave.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Marnie Tave</h4>
                                            <div class="text-block-41">Senior Software Developer of Originals</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c573a8868d4a3ffb943863_Jonmark%20Weber.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Jonmark Weber</h4>
                                            <div class="text-block-41">Sr. Software Engineer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61ca40f12c89cc1b3dcc8bde_eric-f-blob.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Eric Fernandez</h4>
                                            <div class="text-block-41">Lead Senior Engineer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c576439ca45620c388a299_Preston%20Boyden.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Preston Boyden</h4>
                                            <div class="text-block-41">Senior Product Designer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c576938a5bde460eb3fd71_Reed%20Mershon.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Reed Mershon</h4>
                                            <div class="text-block-41">Software Engineer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c576af0c499c7fba705499_Trent%20Jackson.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Trent Jackson</h4>
                                            <div class="text-block-41">Junior Product Designer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61d64b44bf02ae5642b21aed_steph-blob-lo.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Steph Yeager</h4>
                                            <div class="text-block-41">Lead Product designer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61d64652bf02ae8224b1f872_garrett-blob-lo.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Garrett Grimm</h4>
                                            <div class="text-block-41">Lead Software Developer of Originals</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c5781dff51f01eb55c82ab_Suzi%20Kang.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Suzi Kang</h4>
                                            <div class="text-block-41">QA Engineer</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61ce56e6fb6a100f0cf8b5bd_molly-blob.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Molly White</h4>
                                            <div class="text-block-41">Senior Product designer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Tab 6" class="w-tab-pane">
                        <div>
                            <div class="collection-list-wrapper w-dyn-list">
                                <div role="list" class="w-dyn-items w-row">
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b8399d9d2db857be61c333_jeff.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Jeff Lurie</h4>
                                            <div class="text-block-41">Head of Business Development</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b8844245b572923ae4f69f_olo.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Olman Quesada</h4>
                                            <div class="text-block-41">Head of Revenue</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56bb1f439dfc7fc964063_blob%20(6)%201.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Abby Tarver</h4>
                                            <div class="text-block-41">Business Development Associate</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56cdfd6f6dc42d24aaa05_Carolina%20Cardenas.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Carolina Cardenas</h4>
                                            <div class="text-block-41">Partner Community Moderator</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56e689ca4563f5388829c_Keyana%20Sapp.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Keyana Sapp</h4>
                                            <div class="text-block-41">Business Development Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56eaaff51f003e25c6d09_blob%20(8)%201.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Courtney Monger</h4>
                                            <div class="text-block-41">Business Development Associate</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56ed6c18f637c9af5fd67_Genevieve%20Moran.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Genevieve Moran</h4>
                                            <div class="text-block-41">Senior Business Development Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c5701b2154e355c34343b6_blob%20(3)%201.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Emma Donson</h4>
                                            <div class="text-block-41">Partner Success Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61ce5a0d40038a665926068e_eddy-blob.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Eddy Mazariegos</h4>
                                            <div class="text-block-41">Partner Community Moderator</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c571f5ff51f02e925c7807_Jason%20Heegaard.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Jason Heegaard</h4>
                                            <div class="text-block-41">Business Development Associate</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c57386d6f6dc10384ab4e1_Caitlin%20Hempstead.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Caitlin Hempstead</h4>
                                            <div class="text-block-41">Business Development Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c573e59ce77e794fd9bf69_Kristina%20Mikell.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Kristina Mikell</h4>
                                            <div class="text-block-41">Sales Operations Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c574254c32b41339a96b3e_Kim%20Tyrone%20Agapito.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Kim Tyrone Agapito</h4>
                                            <div class="text-block-41">Sr. Product QA Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61d648d649c46bce23cbdd4d_alex-blob.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Alex Ambartsumian</h4>
                                            <div class="text-block-41">Sales Development Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c5756d9233fdb45499a569_Nicole%20Landers.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Nicole Landers</h4>
                                            <div class="text-block-41">Business Development Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c575979ca4560d11889e23_Steven%20Bell.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Steven Bell</h4>
                                            <div class="text-block-41">Partner Success Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c5798024930d60b2157b79_Mel%20Safi.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Mel Safi</h4>
                                            <div class="text-block-41">Partner Success Leader</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61ce55398d36f17a50bb098e_brenden-blob.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Brenden Anklam</h4>
                                            <div class="text-block-41">Business Development Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61ce545bec15b54cf7ea9d5a_jarrett-blob.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Jarrett Pflieger</h4>
                                            <div class="text-block-41">Senior Business Development Manager</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Tab 7" class="w-tab-pane">
                        <div>
                            <div class="collection-list-wrapper w-dyn-list">
                                <div role="list" class="w-dyn-items w-row">
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61ce53f392b039cfd582c89b_amy-blob.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Amy Lozano</h4>
                                            <div class="text-block-41">Customer Support Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c5783e7767c13ef26c0e13_Patrick%20Morgan.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Patrick Morgan</h4>
                                            <div class="text-block-41">Launch Operations Specialist</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c577c6c166ab2267deb31d_Tanner%20Cognion.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Tanner Cognion</h4>
                                            <div class="text-block-41">Launch Operations Team Lead</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61d64250ebb6026fd751aa33_candice-blob-lo.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Candice Murray</h4>
                                            <div class="text-block-41">Director of Customer Experience</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c575b97e0aeb15a0518595_Andrew%20Church.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Andrew Church</h4>
                                            <div class="text-block-41">Customer Support Specialist</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c5754ec18f6321e8f622a3_Michael%20Sohn.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Michael Sohn</h4>
                                            <div class="text-block-41">Customer Support Specialist</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c574da38a91a0fd39a5e47_Kayle%20Hill.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Kayle Hill</h4>
                                            <div class="text-block-41">Partner Success Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c572137ee78e5b475a93fd_Katie%20O%20Boyle.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Katie O&#x27;Boyle</h4>
                                            <div class="text-block-41">Partner Success Associate</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c5712f0c499c5f4970276f_Mac%20Markham.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Mac Markham</h4>
                                            <div class="text-block-41">Partner Success Associate</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c5710aeadad63eea0fc29d_Anna%20Ghirardelli.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Anna Ghirardelli</h4>
                                            <div class="text-block-41">Customer Support Specialist</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56fabf8220dae94ca978e_Dylan%20Lochhead.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Dylan Lochhead</h4>
                                            <div class="text-block-41">Customer Support Specialist</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56f54ff51f04ab55c6d9f_Jennifer%20Gulbransen.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Jennifer Gulbransen</h4>
                                            <div class="text-block-41">Launch Operations Specialist</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56dbc9ca456a4b3888262_Hayley%20Gimbel.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Hayley Gimbel</h4>
                                            <div class="text-block-41">Launch Operations Associate</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56d99d6a0726911cfce61_Bennett%20Rofsky.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Bennett Rofsky</h4>
                                            <div class="text-block-41">Launch Operations Domain Lead</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56d617ee78e42bd5a8c5d_Amanda%20Cooper.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Amanda Cooper</h4>
                                            <div class="text-block-41">Launch Operations Associate</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c56d2874a7a83d258dd128_Matt%20Bean.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Matt Bean</h4>
                                            <div class="text-block-41">Launch Operations Associate</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b884286e1160303a38cfb5_vanessa.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Vanessa Yepes</h4>
                                            <div class="text-block-41">Head of Select Operations</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b893b36e1160f69f392ff9_katleyn-young.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Katelyn Deibert</h4>
                                            <div class="text-block-41">Partner Success Associate</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b839e7c0b4657e0527bb3a_dusty.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Dusty Lambert</h4>
                                            <div class="text-block-41">Director of Launch Operations</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b88f039d2db8d8bf64572c_Sean-stubbs.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Seann Stubbs</h4>
                                            <div class="text-block-41">Head of Self Listing Operations</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Tab 8" class="w-tab-pane">
                        <div>
                            <div class="collection-list-wrapper w-dyn-list">
                                <div role="list" class="w-dyn-items w-row">
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61c574f898ac8941a6cc3786_Taylor%20Wallace.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Taylor Wallace</h4>
                                            <div class="text-block-41">Creative Project Manager</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b8927c75d96f8456db7d6c_Anna%20lvano.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Anna Notario</h4>
                                            <div class="text-block-41">Head of Staff</div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="w-dyn-item w-col w-col-3">
                                        <div class="ab-team-mb"><img loading="lazy"
                                                                     src="assets/615b54e9eebdbb83d9457d5f/61b839cc17b4422cb4a19d25_llona.png"
                                                                     alt="" />
                                            <h4 class="heading-47">Ilona Abramova</h4>
                                            <div class="text-block-41">VP of Operations</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-grow-sec wf-section">
        <div class="container-12 sell-grw-container w-container">
            <div class="sell-grow w-row">
                <div class="w-col w-col-6">
                    <div class="div-block-67">
                        <div class="sell-with-head">
                            <h2 class="heading-48">Sell with us</h2><img
                                    src="https://assets.website-files.com/615b54e9eebdbb6f52457d5b/61b6cec933dc41cd50d18ff0_star1.svg"
                                    loading="lazy" alt="" class="image-129" /><img
                                    src="https://assets.website-files.com/615b54e9eebdbb6f52457d5b/61b6cec933dc412143d18fee_sell-ar.svg"
                                    loading="lazy" alt="" class="image-128" />
                        </div>
                        <p class="paragraph-37">List your digital products.<br />Apply for Grandfatheredly Select.</p><a
                                href="https://sell.appsumo.com/" class="button-4 sell-sec-btn w-button">Start selling</a>
                    </div>
                </div>
                <div class="w-clearfix w-col w-col-6">
                    <div class="div-block-55">
                        <div class="sell-with-head">
                            <h2 class="heading-48">Grow with us</h2><img
                                    src="https://assets.website-files.com/615b54e9eebdbb6f52457d5b/61b6cec933dc412143d18fee_sell-ar.svg"
                                    loading="lazy" alt="" class="image-128" />
                        </div><img
                                src="https://assets.website-files.com/615b54e9eebdbb6f52457d5b/61b6cec933dc41d9d8d18ff1_star2.svg"
                                loading="lazy" alt="" class="image-130" />
                        <p class="paragraph-37">Work doesn’t have to suck.<br />Join our fast-growing team.</p><a
                                href="careers/index.html" class="button-4 sell-sec-btn w-button">Explore roles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ static_asset('assets/frontend/assets/615b54e9eebdbb6f52457d5b/js/appsumo-partners-2f565175f212c5732a1e6e.a7b5c4d02.js') }}"
            type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    <script type="text/javascript">
        const urlSearchParameters = new URLSearchParams(window.location.search);
        var ctaButton = document.getElementsByClassName("button-3 btn-brdr")[0]
        if (ctaButton && urlSearchParameters.toString().length > 0) {
            ctaButton.href = `https://appsumo.com/accounts/signup/?next=/partners/products/&${urlSearchParameters.toString()}`;
        }
    </script>

    <script>
        $(window).scroll(function () {
            var sticky = $('.second-navigation'),
                scroll = $(window).scrollTop();

            if (scroll >= 100) sticky.addClass('fixed');
            else sticky.removeClass('fixed');
        });

    </script>
    <script>
        $(".pop-up-form").click(function () {
            $(".div-block-35").addClass("opn");
        });
    </script>

    <script>
        $(".div-block-37").click(function () {
            $(".div-block-35").removeClass("opn");
        });
    </script>
    <script>
        $('input:radio').click(function () {
            $('input:radio[name=' + $(this).attr('name') + ']').parent().removeClass('checked');
            $(this).parent().addClass('checked');
        });
    </script>

    <script>
        $(function () {
            function loop() {
                $('#upword')
                    .animate({ bottom: 90 }, 1000)
                    .animate({ bottom: 40 }, 1000, loop);
            }
            loop();
        });
    </script>

    <script>
        $("#product_type").change(function () {
            if ($(this).val() == "software") {
                $('#active_customers').attr("required", "true");
                $('#active_customers').css('display', 'block');
            } else {
                $('#active_customers').removeAttr("required");
                $('#active_customers').css('display', 'none');
            }
        });
    </script>

    <script>
        $("#product_type").change(function () {
            if ($(this).val() == "software") {
                $('#active_customers').attr("required", "true");
                $('#active_customers').css('display', 'block');
            } else {
                $('#active_customers').removeAttr("required");
                $('#active_customers').css('display', 'none');
            }
        });
    </script>

    <script>
        $(document).ready(function () {
            var form_id = $("#sell-form").find("form").attr("id")
            if (form_id != "undefined") {
                $('#' + form_id + ' > input[type="submit"]').on('click', function () {
                    if ($("#product_type option:selected").val() == 'software') {
                        var proceedfr = 'true';
                        var validateEmail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                        var emailId = '';
                        $("#" + form_id + " input").each(function () {
                            if ($(this).is(":visible") && $(this).attr("required") != 'undefined') {
                                if ($(this).attr("type") == 'email') {
                                    emailId = $(this).val();
                                }
                                if ($(this).val() == '') {
                                    proceedfr = 'false';
                                    console.log("Blank value for " + $(this).attr("placeholder"));
                                }
                            }
                        })
                        if (!validateEmail.test(emailId)) {
                            proceedfr = 'false';
                            console.log("email not 	validated");
                        }
                        $("#" + form_id + " select").each(function () {
                            if ($(this).is(":visible")) {
                                if ($(this).val() == '') {
                                    proceedfr = 'false';
                                    console.log("Value not provided for " + $(this).attr("name"));
                                }
                            }
                        })
                        if (proceedfr != 'false' && $("#active_customers").is(":visible") && $("#active_customers option:selected").val() != '') {
                            var field_val = $("#active_customers option:selected").val();
                            if (field_val == '1,001 - 5,000' || field_val == '5,000 +') {
                                var redirect_to = $("#" + form_id).attr("redirect");
                                window.location = "" + redirect_to + "";
                            } else { window.location = "accounts/signup/indexa062.html?next=/partners/apply/"; }
                        }
                    } else { window.location = "accounts/signup/indexa062.html?next=/partners/apply/"; }
                })
            }
        })
    </script>

    <script>
        $('.faq-ans').slideUp();

        $('.faq-ques').on("click", function () {
            if (!$(this).hasClass("open")) {
                $('.faq-ans').slideUp();
                $('.faq-ques').removeClass("open");
                $(this).next("div").slideDown();
                $(this).addClass("open");
            }
            else {
                $(this).next('div').slideUp();
                $('.faq-ques').removeClass("open");
                $('faq-ans').slideUp();
            }
        });

    </script>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('#play-button').on('click', function () {
                let video_src = jQuery('#video')[0].src;
                if (video_src.indexOf("autoplay") > -1) {
                    let clean_uri = video_src.substring(0, video_src.indexOf("?"));
                    $('#video').attr('src', clean_uri);
                    jQuery('.play-btn-img').show();
                    jQuery('.pause-btn-img').hide();
                } else {
                    jQuery('#video')[0].src += "?autoplay=1";
                    jQuery('.play-btn-img').hide();
                    jQuery('.pause-btn-img').show();

                }
            })
        })
    </script>

    <script>
        $('#play-button').on("click", function (e) {
            $('#video-overlay-img').toggle('fast');
        });
    </script>

    <script>
        $(document).ready(function () {
            $('.testi-name-bx:nth-child(2').addClass('active')

            $('.testi-name-bx').on('click', function () {
                let index = $(this).index() + 1;
                $('.testi-nav .w-slider-dot:nth-child(' + index + ')').trigger('click');
                $(this).addClass('active').siblings().removeClass('active');
            });

            $('.testi-nav .w-slider-dot').on('click', function () {
                let dot_index = $(this).index() + 1;
                $('.testi-name-bx:nth-child(' + dot_index + ')').addClass('active').siblings().removeClass('active');
            });

        });
    </script>
@endpush