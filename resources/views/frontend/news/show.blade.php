@extends('frontend.layouts.app')

@section('title', $pageTitle ?? $post->title)
@section('meta_description', $pageDescription ?? ($post->summary ?: 'Chi tiết tin tức'))

@section('content')
@php
    $heroImage = $post->image ? asset($post->image) : asset('images/blog/blog-item-1.jpg');
    $displayDate = optional($post->published_at ?: $post->created_at)->format('d/m/Y');
@endphp

<div class="main-content">
    <div class="blog-post">
        <div class="tf-container tf-spacing-1">
            <div class="row">
                <div class="col-lg-8">
                    <div class="details-post">
                        <div class="heading-title mb_24">
                            @if ($post->category)
                                <div class="tag-heading text-button-small text_primary-color">
                                    <a href="{{ route('frontend.categories.show', $post->category->slug) }}">{{ $post->category->name }}</a>
                                </div>
                            @endif
                            <h3>{{ $post->title }}</h3>
                            <div class="meta-post d-flex align-items-center mb_16">
                                <div class="item text_primary-color text-title fw-6 d-flex align-items-center gap_8">
                                    <i class="icon-CalendarBlank"></i> {{ $displayDate }}
                                </div>
                            </div>
                        </div>

                        <div class="article-thumb image-wrap mb_24">
                            <img loading="lazy" decoding="async" src="{{ $heroImage }}" alt="{{ $post->title }}">
                        </div>

                        @if ($post->summary)
                            <p class="passive text-body-2">{{ $post->summary }}</p>
                        @endif

                        <div class="passive text-body-2">
                            {!! $post->content !!}
                        </div>

                        @if ($relatedPosts->isNotEmpty())
                            <div class="tf-article-navigation">
                                @foreach ($relatedPosts->take(2) as $relatedPost)
                                    <div class="item">
                                        <a href="{{ $relatedPost->frontend_url }}" class="hover-underline-link text-button text_primary-color fw-7 mb_8">
                                            Bai lien quan
                                        </a>
                                        <h5>
                                            <a href="{{ $relatedPost->frontend_url }}" class="link line-clamp-2">
                                                {{ $relatedPost->title }}
                                            </a>
                                        </h5>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="tf-sidebar sticky-top">
                        @if (($categories ?? collect())->isNotEmpty())
                            <div class="sidebar-item sidebar-categories">
                                <h5 class="sidebar-title mb_17">Danh mục tin tức</h5>
                                <ul class="list-categories d-grid gap_8">
                                    <li class="d-flex align-items-center justify-content-between text-body-default">
                                        <a href="{{ route('frontend.news.index') }}" class="hover-line-text">Tất cả tin tức</a>
                                    </li>
                                    @foreach ($categories as $category)
                                        <li class="d-flex align-items-center justify-content-between text-body-default">
                                            <a href="{{ route('frontend.categories.show', $category->slug) }}" class="hover-line-text {{ $post->category_id === $category->id ? 'text_primary-color fw-6' : '' }}">
                                                {{ $category->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (($recentPosts ?? collect())->isNotEmpty())
                            <div class="sidebar-item sidebar-recent-post">
                                <h5 class="sidebar-title mb_17">Bai viet moi</h5>
                                <ul>
                                    @foreach ($recentPosts as $recentPost)
                                        @php
                            $recentUrl = $recentPost->frontend_url;
                                            $recentImage = $recentPost->image ? asset($recentPost->image) : asset('images/blog/recent-post-1.jpg');
                                            $recentDate = optional($recentPost->published_at ?: $recentPost->created_at)->format('d/m/Y');
                                        @endphp
                                        <li class="recent-post hover-image-rotate">
                                            <a href="{{ $recentUrl }}" class="img-style">
                                                <img src="{{ $recentImage }}" width="100" height="100" alt="{{ $recentPost->title }}">
                                            </a>
                                            <div class="content">
                                                <div class="meta-post d-flex align-items-center mb_7">
                                                    <div class="item text_secondary-color text-caption-2">{{ $recentDate }}</div>
                                                </div>
                                                <div class="text-title title text_primary-color fw-6">
                                                    <a href="{{ $recentUrl }}" class="link line-clamp-2">{{ $recentPost->title }}</a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
