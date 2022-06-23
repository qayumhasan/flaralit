@php
use App\Models\Permission;
@endphp
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if(is_authorized(\App\Models\Permission::DASHBOARD_MODULE))
        <li class="nav-item {{ \Request::routeIs('admin.dashboard')?'active':''}}">
            <a class="nav-link  {{ \Request::routeIs('admin.dashboard')?'active_nav':''}}"
                href="{{route('admin.dashboard')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @endif
        @if(is_authorized(Permission::PRODUCT_MODULE))
        <li
            class="nav-item {{ \Request::routeIs('admin.product_category.*', 'admin.product_type.*', 'admin.product.*')?'active':''}}">
            <a class="nav-link" data-toggle="collapse" href="#product_category"
                aria-expanded="{{ \Request::routeIs('admin.product_category.*', 'admin.product_type.*', 'admin.product.*')?'true':'false'}}"
                aria-controls="ui-basic">
                <i class="ti-panel mr-3"></i>
                <span class="menu-title">Product</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ \Request::routeIs('admin.product_category.*', 'admin.product_type.*', 'admin.product.*')?'show':''}}"
                id="product_category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ \Request::routeIs('admin.product_category.*')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.product_category.index') }}">Category</a>
                    </li>
                    <li class="nav-item {{ \Request::routeIs('admin.product_type.*')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.product_type.index') }}">Type</a></li>
                    <li class="nav-item {{ \Request::routeIs('admin.product.create')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.product.create') }}">Create</a></li>
                    <li class="nav-item {{ \Request::routeIs('admin.product.index')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.product.index') }}">Products</a></li>
                </ul>
            </div>
        </li>
        @endif
        @if(is_authorized(Permission::SELLER_PRODUCT_MODULE))
        <li class="nav-item {{ \Request::routeIs('admin.seller_product.*') ? 'active' : ''}}">
            <a class="nav-link" data-toggle="collapse" href="#seller_product"
                aria-expanded="{{ \Request::routeIs('admin.seller_product.*') ? 'true' : 'false'}}"
                aria-controls="ui-basic">
                <i class="ti-panel mr-3"></i>
                <span class="menu-title">Seller Product</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ \Request::routeIs('admin.seller_product.*')?'show':''}}" id="seller_product">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ \Request::routeIs('admin.seller_product.pending') ? 'active_nav' : ''}}"><a
                            class="nav-link" href="{{ route('admin.seller_product.pending') }}">Pending</a>
                    </li>
                    <li class="nav-item {{ \Request::routeIs('admin.seller_product.accepted')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.seller_product.accepted') }}">Accepted</a></li>
                    <li class="nav-item {{ \Request::routeIs('admin.seller_product.rejected')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.seller_product.rejected') }}">Rejected</a></li>
                </ul>
            </div>
        </li>
        @endif
        @if(is_authorized(\App\Models\Permission::REVIEWS_MODULE))
        <li
            class="nav-item {{ \Request::routeIs('admin.review.index', 'admin.product.review.*', 'admin.product.review') ? 'active' : '' }}">
            <a class="nav-link  {{ \Request::routeIs('admin.review.index', 'admin.product.review.*', 'admin.product.review') ? 'active_nav' : '' }}"
                href="{{route('admin.review.index')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Reviews</span>
            </a>
        </li>
        @endif
        @if(is_authorized(\App\Models\Permission::QUESTIONS_MODULE))
        <li
            class="nav-item {{ \Request::routeIs('admin.question.index', 'admin.product.question.*', 'admin.product.question') ? 'active' : ''}}">
            <a class="nav-link  {{ \Request::routeIs('admin.question.index', 'admin.product.question.*', 'admin.product.question')?'active_nav':''}}"
                href="{{route('admin.question.index')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Questions</span>
            </a>
        </li>
        @endif
        @if(is_authorized(Permission::BLOG_MODULE))
        <li class="nav-item {{ \Request::routeIs('admin.blog_category.*', 'admin.blog.*')?'active':''}}">
            <a class="nav-link" data-toggle="collapse" href="#blog"
                aria-expanded="{{ \Request::routeIs('admin.blog_category.*', 'admin.blog.*')?'true':'false'}}"
                aria-controls="ui-basic">
                <i class="ti-panel mr-3"></i>
                <span class="menu-title">Manage Blog</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ \Request::routeIs('admin.blog_category.*', 'admin.blog.*')?'show':''}}" id="blog">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ \Request::routeIs('admin.blog_category.*')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.blog_category.index') }}">Category</a>
                    </li>
                    <li class="nav-item {{ \Request::routeIs('admin.blog.create')?'active_nav':''}}"><a class="nav-link"
                            href="{{ route('admin.blog.create') }}">Create</a></li>
                    <li
                        class="nav-item {{ \Request::routeIs('admin.blog.index', 'admin.blog.edit', 'admin.blog.update')?'active_nav':''}}">
                        <a class="nav-link" href="{{ route('admin.blog.index') }}">Blogs</a>
                    </li>
                </ul>
            </div>
        </li>
        @endif
        @if(is_authorized(Permission::PLUS_MODULE))
        <li
            class="nav-item {{ \Request::routeIs('admin.membership.plan_section.*','admin.plus.banner_section.*', 'admin.plus.content_section.*', 'admin.plus.community_section.*', 'admin.plus.favourites_section.*')?'active':''}}">
            <a class="nav-link" data-toggle="collapse" href="#join_plus"
                aria-expanded="{{ \Request::routeIs('admin.membership.plan_section.*','admin.plus.banner_section.*', 'admin.plus.content_section.*', 'admin.plus.community_section.*', 'admin.plus.favourites_section.*')?'true':'false'}}"
                aria-controls="ui-basic">
                <i class="ti-panel mr-3"></i>
                <span class="menu-title">Manage Plus Page</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ \Request::routeIs('admin.membership.plan_section.*','admin.plus.banner_section.*', 'admin.plus.content_section.*', 'admin.plus.community_section.*', 'admin.plus.favourites_section.*', 'admin.plus.stack.*', 'admin.plus.faq.*')?'show':''}}"
                id="join_plus">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ \Request::routeIs('admin.membership.plan_section.edit')?'active_nav':''}}"><a
                        class="nav-link" href="{{ route('admin.membership.plan_section.edit') }}">Membership Plan</a>
                    </li>
                    <li class="nav-item {{ \Request::routeIs('admin.plus.banner_section.edit')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.plus.banner_section.edit') }}">Banner Section</a>
                    </li>
                    <li class="nav-item {{ \Request::routeIs('admin.plus.content_section.*')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.plus.content_section.index') }}">Content Section</a>
                    </li>
                    <li class="nav-item {{ \Request::routeIs('admin.plus.community_section.*')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.plus.community_section.edit') }}">Community
                            Section</a>
                    </li>
                    <li class="nav-item {{ \Request::routeIs('admin.plus.favourites_section.*')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.plus.favourites_section.edit') }}">Favourites
                            Section</a>
                    </li>
                    <li class="nav-item {{ \Request::routeIs('admin.plus.stack.*')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.plus.stack.index') }}">Stack Saving
                            Section</a>
                    </li>
                    <li class="nav-item {{ \Request::routeIs('admin.plus.faq.*')?'active_nav':''}}"><a class="nav-link"
                            href="{{ route('admin.plus.faq.index') }}">Faqs
                            Section</a>
                    </li>
                </ul>
            </div>
        </li>
        @endif
        @if(is_authorized(Permission::GUIDELINE_MODULE))
        <li class="nav-item {{ \Request::routeIs('admin.guideline.*')?'active':''}}">
            <a class="nav-link" data-toggle="collapse" href="#guideline"
                aria-expanded="{{ \Request::routeIs('admin.guideline.*')?'true':'false'}}" aria-controls="ui-basic">
                <i class="ti-panel mr-3"></i>
                <span class="menu-title">Guideline Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ \Request::routeIs('admin.guideline.*')?'show':''}}" id="guideline">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ \Request::routeIs('admin.guideline.copy.*')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.guideline.copy.index') }}">Copy</a>
                    </li>
                    <li class="nav-item {{ \Request::routeIs('admin.guideline.image.*')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.guideline.image.index') }}">Image</a>
                    </li>
                    <li class="nav-item {{ \Request::routeIs('admin.guideline.how_it_work.*')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.guideline.how_it_work.index') }}">How It Works</a>
                    </li>
                    <li class="nav-item {{ \Request::routeIs('admin.guideline.guide.*')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.guideline.guide.index') }}">Guide</a>
                    </li>
                </ul>
            </div>
        </li>
        @endif
        @if(is_authorized(\App\Models\Permission::USER_MODULE))
        <li class="nav-item">
            <a class="nav-link {{ \Request::routeIs('admin.user.*')?'active':''}}" data-toggle="collapse" href="#users"
                aria-expanded="{{ \Request::routeIs('admin.user.*')?'true':'false'}}" aria-controls="ui-basic">
                <i class="icon-grid mr-3"></i>
                <span class="menu-title">Manage Users</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ \Request::routeIs('admin.user.*')?'show':''}}" id="users">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ \Request::routeIs('admin.user.*')?'active_nav':''}}">
                        <a class="nav-link" href="{{ route('admin.user.index') }}">Users</a>
                    </li>
                </ul>
            </div>
        </li>
        @endif
        @if(is_authorized(\App\Models\Permission::ROLE_MODULE))
        <li class="nav-item {{ \Request::routeIs('admin.role.*')?'active':''}}">
            <a class="nav-link  {{ \Request::routeIs('admin.role.*')?'active_nav':''}}"
                href="{{route('admin.role.index')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Manage Roles</span>
            </a>
        </li>
        @endif
        @if(is_authorized(Permission::NOTIFICATION_MODULE))
        <li
            class="nav-item {{ \Request::routeIs('admin.notification.template.*', 'admin.notification.user.list.index')?'active':''}}">
            <a class="nav-link" data-toggle="collapse" href="#notification"
                aria-expanded="{{ \Request::routeIs('admin.notification.template.*', 'admin.notification.user.list.index')?'true':'false'}}"
                aria-controls="ui-basic">
                <i class="ti-panel mr-3"></i>
                <span class="menu-title">Notification</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ \Request::routeIs('admin.notification.template.*', 'admin.notification.user.list.index')?'show':''}}"
                id="notification">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ \Request::routeIs('admin.notification.template.*')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.notification.template.index') }}">Template</a>
                    </li>
                    <li class="nav-item {{ \Request::routeIs('admin.notification.user.list.index')?'active_nav':''}}">
                        <a class="nav-link" href="{{ route('admin.notification.user.list.index') }}">Send</a>
                    </li>
                </ul>
            </div>
        </li>
        @endif
        @if(is_authorized(Permission::NOTIFICATION_MODULE))
        <li class="nav-item {{ \Request::routeIs('admin.testimonial.*')?'active':''}}">
            <a class="nav-link" data-toggle="collapse" href="#testimonial"
                aria-expanded="{{ \Request::routeIs('admin.testimonial.*')?'true':'false'}}" aria-controls="ui-basic">
                <i class="ti-panel mr-3"></i>
                <span class="menu-title">Testimonials</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ \Request::routeIs('admin.testimonial.*')?'show':''}}" id="testimonial">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ \Request::routeIs('admin.testimonial.create')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.testimonial.create') }}">Create</a>
                    </li>
                    <li class="nav-item {{ \Request::routeIs('admin.testimonial.index')?'active_nav':''}}">
                        <a class="nav-link" href="{{ route('admin.testimonial.index') }}">Testimonials</a>
                    </li>
                </ul>
            </div>
        </li>
        @endif
        @if(is_authorized(Permission::SETUP_MODULE))
        <li class="nav-item {{ \Request::routeIs('admin.configuration.*')?'active':''}}">
            <a class="nav-link" data-toggle="collapse" href="#setup"
                aria-expanded="{{ \Request::routeIs('admin.configuration.*')?'true':'false'}}" aria-controls="ui-basic">
                <i class="ti-panel mr-3"></i>
                <span class="menu-title">Setup & Configuration</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ \Request::routeIs('admin.configuration.*')?'show':''}}" id="setup">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ \Request::routeIs('admin.configuration.*')?'active_nav':''}}"><a
                            class="nav-link" href="{{ route('admin.configuration.edit') }}">Configurations</a>
                    </li>
                </ul>
            </div>
        </li>
        @endif
    </ul>
</nav>