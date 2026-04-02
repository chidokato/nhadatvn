@extends('frontend.layouts.app')

@section('title', $pageTitle ?? 'Lien he')
@section('meta_description', $pageDescription ?? 'Thong tin lien he')

@section('content')
    <div class="page-title style-default">
        <div class="tf-container">
            <div class="page-title-inner">
                <div class="content text-center">
                    <h2>Lien he</h2>
                    <div class="breadcrumbs">
                        <a href="{{ route('frontend.home') }}">Trang chu</a>
                        <span>/</span>
                        <span>Lien he</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content tf-spacing-4">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget-box mb_30">
                        <h5 class="title mb_20">Thong tin cong ty</h5>
                        <ul class="box-list d-grid gap_16">
                            <li><strong>Ten cong ty:</strong> {{ $settings->company_name ?? 'NhaDatVN' }}</li>
                            <li><strong>Dia chi:</strong> {{ $settings->address ?? 'Dang cap nhat' }}</li>
                            <li><strong>Email:</strong> {{ $settings->email ?? 'Dang cap nhat' }}</li>
                            <li><strong>Hotline:</strong> {{ $settings->hotline ?? 'Dang cap nhat' }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="form-contact style-default">
                        <div class="heading-section mb_30">
                            <span class="sub text-uppercase fw-6 text_secondary-color-2">Contacts</span>
                            <h3>Gui thong tin lien he</h3>
                        </div>
                        <form class="row">
                            <div class="col-md-6">
                                <fieldset class="mb_20">
                                    <input type="text" placeholder="Ho ten">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="mb_20">
                                    <input type="email" placeholder="Email">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="mb_20">
                                    <input type="text" placeholder="So dien thoai">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="mb_20">
                                    <input type="text" placeholder="Chu de">
                                </fieldset>
                            </div>
                            <div class="col-12">
                                <fieldset class="mb_20">
                                    <textarea rows="7" placeholder="Noi dung"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-12">
                                <button type="button" class="tf-btn">
                                    <span>Gui lien he</span>
                                    <span class="bg-effect"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
