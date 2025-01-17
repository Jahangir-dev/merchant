@extends('admin.master')

@section('title') {{translateText( $pageTitle )}} @endsection

@section('content')
<div class="container-fluid">
    <div class="row user">
    <div class="app-title col-md-12">
        <div>
            <h1><i class="fa fa-cogs"></i> {{translateText( $pageTitle) }}</h1>
        </div>
    </div>
        <div class="col-md-3">
            <div class="tile p-0">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab">{{translateText('General')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#site-logo" data-toggle="tab">{{translateText('Site Logo')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#footer-seo" data-toggle="tab">{{translateText('Footer SEO')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#social-links" data-toggle="tab">{{translateText('Social Links')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#analytics" data-toggle="tab">{{translateText('Analytics')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#payments" data-toggle="tab">{{translateText('Payments')}}</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="general">
                    @include('admin.settings.includes.general')
                </div>
                <div class="tab-pane fade" id="site-logo">
                    @include('admin.settings.includes.logo')
                </div>
                <div class="tab-pane fade" id="footer-seo">
                    @include('admin.settings.includes.footer_seo')
                </div>
                <div class="tab-pane fade" id="social-links">
                    @include('admin.settings.includes.social_links')
                </div>
                <div class="tab-pane fade" id="analytics">
                    @include('admin.settings.includes.analytics')
                </div>
                <div class="tab-pane fade" id="payments">
                    @include('admin.settings.includes.payments')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
