@csrf

@php
    $currentImage = old('existing_image', $post->image ?? '');
    $imagePreview = $currentImage ? asset($currentImage) : '';
    $existingGalleryImages = $galleryImages ?? collect();
    $existingFloorPlans = $floorPlans ?? collect();
    $galleryTypes = \App\Models\PostImage::types();
    $galleryImagesByType = collect($galleryTypes)
        ->mapWithKeys(function ($label, $typeKey) use ($existingGalleryImages) {
            return [
                $typeKey => $existingGalleryImages
                    ->filter(fn ($image) => ($image->image_type ?? \App\Models\PostImage::TYPE_PERSPECTIVE) === $typeKey)
                    ->values(),
            ];
        });
    $storedPrice = old('price', null);
    $storedPriceUnit = old('price_unit', null);

    if ($type === 'product' && $storedPrice === null && isset($post) && $post->price !== null) {
        if ((float) $post->price >= 1000000000) {
            $storedPrice = rtrim(rtrim(number_format((float) $post->price / 1000000000, 2, '.', ''), '0'), '.');
            $storedPriceUnit = 'ty';
        } else {
            $storedPrice = rtrim(rtrim(number_format((float) $post->price / 1000000, 2, '.', ''), '0'), '.');
            $storedPriceUnit = 'trieu';
        }
    }

    if ($storedPriceUnit === null) {
        $storedPriceUnit = 'ty';
    }

    $oldFloorPlans = old('floor_plans');
    if ($oldFloorPlans !== null) {
        $floorPlanItems = collect($oldFloorPlans)->values();
    } else {
        $floorPlanItems = $existingFloorPlans
            ->map(fn ($floorPlan) => [
                'id' => $floorPlan->id,
                'name' => $floorPlan->name,
                'existing_image' => $floorPlan->image,
            ])
            ->values();
    }
@endphp

<div class="row">
    <div class="col-xl-9">
        <div class="card border">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Tieu de</label>
                            <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title ?? '') }}">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" id="slug" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $post->slug ?? '') }}">
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="summary" class="form-label">Mo ta ngan</label>
                            <textarea id="summary" name="summary" rows="3" class="form-control editor @error('summary') is-invalid @enderror">{{ old('summary', $post->summary ?? '') }}</textarea>
                            @error('summary')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    @if ($type === 'product')
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="address" class="form-label">Dia chi</label>
                                <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $post->address ?? '') }}">
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="map_embed" class="form-label">Maps</label>
                                <textarea id="map_embed" name="map_embed" rows="4" class="form-control @error('map_embed') is-invalid @enderror" placeholder="Dan ma nhung Google Maps vao day">{{ old('map_embed', $post->map_embed ?? '') }}</textarea>
                                @error('map_embed')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Dien tich (m2)</label>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <input type="number" step="0.01" min="0" id="area_from" name="area_from" class="form-control @error('area_from') is-invalid @enderror" value="{{ old('area_from', $post->area_from ?? $post->area ?? '') }}" placeholder="Tu">
                                        @error('area_from')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <input type="number" step="0.01" min="0" id="area_to" name="area_to" class="form-control @error('area_to') is-invalid @enderror" value="{{ old('area_to', $post->area_to ?? $post->area ?? '') }}" placeholder="Den">
                                        @error('area_to')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">So tang</label>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <input type="number" min="0" id="floor_count_from" name="floor_count_from" class="form-control @error('floor_count_from') is-invalid @enderror" value="{{ old('floor_count_from', $post->floor_count_from ?? $post->floor_count ?? '') }}" placeholder="Tu">
                                        @error('floor_count_from')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <input type="number" min="0" id="floor_count_to" name="floor_count_to" class="form-control @error('floor_count_to') is-invalid @enderror" value="{{ old('floor_count_to', $post->floor_count_to ?? $post->floor_count ?? '') }}" placeholder="Den">
                                        @error('floor_count_to')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">So can</label>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <input type="number" min="0" id="unit_count_from" name="unit_count_from" class="form-control @error('unit_count_from') is-invalid @enderror" value="{{ old('unit_count_from', $post->unit_count_from ?? $post->unit_count ?? '') }}" placeholder="Tu">
                                        @error('unit_count_from')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <input type="number" min="0" id="unit_count_to" name="unit_count_to" class="form-control @error('unit_count_to') is-invalid @enderror" value="{{ old('unit_count_to', $post->unit_count_to ?? $post->unit_count ?? '') }}" placeholder="Den">
                                        @error('unit_count_to')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">So phong ngu</label>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <input type="number" min="0" id="bedroom_count_from" name="bedroom_count_from" class="form-control @error('bedroom_count_from') is-invalid @enderror" value="{{ old('bedroom_count_from', $post->bedroom_count_from ?? $post->bedroom_count ?? '') }}" placeholder="Tu">
                                        @error('bedroom_count_from')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <input type="number" min="0" id="bedroom_count_to" name="bedroom_count_to" class="form-control @error('bedroom_count_to') is-invalid @enderror" value="{{ old('bedroom_count_to', $post->bedroom_count_to ?? $post->bedroom_count ?? '') }}" placeholder="Den">
                                        @error('bedroom_count_to')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">So WC</label>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <input type="number" min="0" id="bathroom_count_from" name="bathroom_count_from" class="form-control @error('bathroom_count_from') is-invalid @enderror" value="{{ old('bathroom_count_from', $post->bathroom_count_from ?? $post->bathroom_count ?? '') }}" placeholder="Tu">
                                        @error('bathroom_count_from')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <input type="number" min="0" id="bathroom_count_to" name="bathroom_count_to" class="form-control @error('bathroom_count_to') is-invalid @enderror" value="{{ old('bathroom_count_to', $post->bathroom_count_to ?? $post->bathroom_count ?? '') }}" placeholder="Den">
                                        @error('bathroom_count_to')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="col-12">
                        <div class="mb-0">
                            <label for="content" class="form-label">Noi dung</label>
                            <textarea id="content" name="content" rows="8" class="form-control editor @error('content') is-invalid @enderror">{{ old('content', $post->content ?? '') }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border">
            <div class="card-header">
                <h5 class="card-title mb-0">Cau hinh SEO</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="seo_title" class="form-label">Title</label>
                            <input type="text" id="seo_title" name="seo_title" class="form-control @error('seo_title') is-invalid @enderror" value="{{ old('seo_title', $post->seo_title ?? '') }}" placeholder="Nhap SEO title">
                            @error('seo_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="seo_description" class="form-label">Description</label>
                            <textarea id="seo_description" name="seo_description" rows="3" class="form-control @error('seo_description') is-invalid @enderror" placeholder="Nhap SEO description">{{ old('seo_description', $post->seo_description ?? '') }}</textarea>
                            @error('seo_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="form-label mb-0">Hien thi</label>
                            </div>
                            <div class="col-lg-10">
                                <div id="seo-link-preview" class="text-muted">{{ url('/') }}/san-pham/slug</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if ($type === 'product')
            <div class="card border">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title mb-0">Mat bang du an</h5>
                    <button type="button" id="add-floor-plan" class="btn btn-primary btn-sm">Them mat bang</button>
                </div>
                <div class="card-body">
                    @error('floor_plans')
                        <div class="alert alert-danger py-2">{{ $message }}</div>
                    @enderror
                    <div id="floor-plan-list" class="d-flex flex-column gap-3">
                        @foreach ($floorPlanItems as $index => $floorPlanItem)
                            @php
                                $floorPlanImage = $floorPlanItem['existing_image'] ?? '';
                            @endphp
                            <div class="border rounded p-3 floor-plan-item" data-floor-plan-item>
                                <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
                                    <h6 class="mb-0">Mat bang #{{ $loop->iteration }}</h6>
                                    <button type="button" class="btn btn-outline-danger btn-sm remove-floor-plan">Xoa</button>
                                </div>
                                <input type="hidden" name="floor_plans[{{ $index }}][id]" value="{{ $floorPlanItem['id'] ?? '' }}">
                                <input type="hidden" name="floor_plans[{{ $index }}][existing_image]" value="{{ $floorPlanImage }}">
                                <div class="row g-3 align-items-start">
                                    <div class="col-md-4">
                                        <input type="file" name="floor_plans[{{ $index }}][image_file]" class="d-none floor-plan-file-input" accept="image/*">
                                        <button type="button" class="border rounded bg-light d-flex align-items-center justify-content-center overflow-hidden p-0 w-100 floor-plan-image-box" style="height: 180px;">
                                            <img src="{{ $floorPlanImage ? asset($floorPlanImage) : '' }}" alt="Floor plan" class="w-100 h-100 object-fit-cover floor-plan-preview {{ $floorPlanImage ? '' : 'd-none' }}">
                                            <div class="text-center text-muted px-3 floor-plan-placeholder {{ $floorPlanImage ? 'd-none' : '' }}">
                                                <div class="display-6 mb-2"><i class="ri-image-line"></i></div>
                                                <div class="fw-semibold">NO IMAGE</div>
                                                <div>Chon anh mat bang</div>
                                            </div>
                                        </button>
                                        @error("floor_plans.$index.image_file")
                                            <div class="text-danger small mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Ten mat bang</label>
                                        <input type="text" name="floor_plans[{{ $index }}][name]" class="form-control @error("floor_plans.$index.name") is-invalid @enderror" value="{{ $floorPlanItem['name'] ?? '' }}" placeholder="Vi du: Mat bang tang 1">
                                        @error("floor_plans.$index.name")
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div id="remove-floor-plans-container"></div>
                    <div class="form-text mt-3">Moi mat bang gom ten va anh. Ban co the them nhieu mat bang cho mot du an.</div>
                </div>
            </div>
        @endif
    </div>

    <div class="col-xl-3">
        <div class="card border">
            <div class="card-body">
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select id="category_id" name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                        <option value="">Khong chon</option>
                        @foreach ($categories as $id => $name)
                            <option value="{{ $id }}" {{ (string) old('category_id', $post->category_id ?? '') === (string) $id ? 'selected' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                @if ($type === 'product')
                    <div class="mb-3">
                        <label for="price" class="form-label">Gia</label>
                        <div class="row g-2">
                            <div class="col-8">
                                <input type="number" step="0.01" min="0" id="price" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ $storedPrice ?? '' }}">
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <select id="price_unit" name="price_unit" class="form-select @error('price_unit') is-invalid @enderror">
                                    <option value="ty" {{ $storedPriceUnit === 'ty' ? 'selected' : '' }}>Ty</option>
                                    <option value="trieu" {{ $storedPriceUnit === 'trieu' ? 'selected' : '' }}>Trieu</option>
                                </select>
                                @error('price_unit')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                @endif

                <div class="card border mb-3">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Hinh anh</h5>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="existing_image" value="{{ $currentImage }}">
                        <input type="hidden" name="remove_image" id="remove_image" value="0">
                        <input type="file" id="image_file" name="image_file" class="d-none" accept="image/*">
                        @if ($type === 'product')
                            <input type="file" id="gallery_files_interior" name="gallery_files_interior[]" class="d-none" accept="image/*" multiple>
                            <input type="file" id="gallery_files_perspective" name="gallery_files_perspective[]" class="d-none" accept="image/*" multiple>
                            <input type="file" id="gallery_files_amenity" name="gallery_files_amenity[]" class="d-none" accept="image/*" multiple>
                        @endif

                        <div class="d-flex flex-column gap-2">
                            <button type="button" id="image-preview-box" class="border rounded bg-light d-flex align-items-center justify-content-center overflow-hidden p-0 w-100" style="height: 205px;">
                                <img id="image-preview" src="{{ $imagePreview }}" alt="Preview" class="w-100 h-100 object-fit-cover {{ $imagePreview ? '' : 'd-none' }}">
                                <div id="image-placeholder" class="text-center text-muted px-3 {{ $imagePreview ? 'd-none' : '' }}">
                                    <div class="display-6 mb-2">
                                        <i class="ri-image-line"></i>
                                    </div>
                                    <div class="fw-semibold">NO IMAGE</div>
                                    <div>Click hoac drop anh vao day</div>
                                </div>
                            </button>
                            <button type="button" id="remove-image-trigger" class="btn btn-soft-danger btn-sm align-self-start {{ $imagePreview ? '' : 'd-none' }}">Bo anh dai dien</button>
                        </div>

                        @error('image_file')
                            <div class="text-danger small mt-3">{{ $message }}</div>
                        @enderror

                        @if ($type === 'product')
                            @error('gallery_files_interior.*')
                                <div class="text-danger small mt-3">{{ $message }}</div>
                            @enderror
                            @error('gallery_files_perspective.*')
                                <div class="text-danger small mt-3">{{ $message }}</div>
                            @enderror
                            @error('gallery_files_amenity.*')
                                <div class="text-danger small mt-3">{{ $message }}</div>
                            @enderror

                            <div class="mt-3 d-flex flex-column gap-3">
                                @foreach ($galleryTypes as $galleryType => $galleryLabel)
                                    <div class="border rounded p-3">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <div class="fw-semibold">{{ $galleryLabel }}</div>
                                            <button
                                                type="button"
                                                class="btn btn-light border rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 gallery-picker-trigger"
                                                data-gallery-type="{{ $galleryType }}"
                                                style="width: 42px; height: 42px;"
                                            >
                                                <i class="ri-add-line" style="font-size: 24px; color: #7b7b7b;"></i>
                                            </button>
                                        </div>
                                        <div id="gallery-preview-grid-{{ $galleryType }}" data-gallery-grid="{{ $galleryType }}" class="d-flex align-items-start gap-2 flex-wrap">
                                            @foreach ($galleryImagesByType[$galleryType] as $galleryImage)
                                                <div class="position-relative border rounded overflow-hidden bg-light gallery-item" data-gallery-item style="width: 72px; height: 72px;">
                                                    <img src="{{ asset($galleryImage->image) }}" alt="Gallery" class="w-100 h-100 object-fit-cover">
                                                    <button
                                                        type="button"
                                                        class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1 rounded-circle d-flex align-items-center justify-content-center remove-gallery-item"
                                                        data-existing-id="{{ $galleryImage->id }}"
                                                        data-gallery-type="{{ $galleryType }}"
                                                        style="width: 20px; height: 20px; line-height: 1;"
                                                    >x</button>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                                <div class="form-text mt-0">Moi nhom anh co khu upload rieng. Anh se duoc nen truoc khi upload.</div>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $post->is_active ?? true) ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">Hien thi {{ strtolower($typeLabel) }}</label>
                </div>

                @if ($type === 'product')
                    <div class="form-check form-switch mt-3">
                        <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $post->is_featured ?? false) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_featured">Du an noi bat</label>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var fileInput = document.getElementById('image_file');
        var previewBox = document.getElementById('image-preview-box');
        var removeButton = document.getElementById('remove-image-trigger');
        var preview = document.getElementById('image-preview');
        var placeholder = document.getElementById('image-placeholder');
        var removeImageInput = document.getElementById('remove_image');
        var slugInput = document.getElementById('slug');
        var seoLinkPreview = document.getElementById('seo-link-preview');
        var galleryTypeKeys = ['interior', 'perspective', 'amenity'];
        var galleryInputs = {};
        var galleryGrids = {};
        var galleryFiles = {};
        var floorPlanList = document.getElementById('floor-plan-list');
        var addFloorPlanButton = document.getElementById('add-floor-plan');
        var removeFloorPlansContainer = document.getElementById('remove-floor-plans-container');
        var floorPlanIndex = floorPlanList ? floorPlanList.querySelectorAll('[data-floor-plan-item]').length : 0;

        galleryTypeKeys.forEach(function (typeKey) {
            galleryInputs[typeKey] = document.getElementById('gallery_files_' + typeKey);
            galleryGrids[typeKey] = document.getElementById('gallery-preview-grid-' + typeKey);
            galleryFiles[typeKey] = galleryInputs[typeKey] ? new DataTransfer() : null;
        });

        function loadImage(file) {
            return new Promise(function (resolve, reject) {
                var image = new Image();
                var objectUrl = URL.createObjectURL(file);

                image.onload = function () {
                    URL.revokeObjectURL(objectUrl);
                    resolve(image);
                };

                image.onerror = function () {
                    URL.revokeObjectURL(objectUrl);
                    reject(new Error('Khong doc duoc anh.'));
                };

                image.src = objectUrl;
            });
        }

        function canvasToBlob(canvas, type, quality) {
            return new Promise(function (resolve, reject) {
                canvas.toBlob(function (blob) {
                    if (!blob) {
                        reject(new Error('Khong the nen anh.'));
                        return;
                    }

                    resolve(blob);
                }, type, quality);
            });
        }

        async function compressImage(file, options) {
            var settings = Object.assign({
                maxWidth: 1600,
                maxHeight: 1600,
                quality: 0.82,
                outputType: 'image/webp'
            }, options || {});

            if (!file || !file.type || file.type.indexOf('image/') !== 0 || file.type === 'image/gif') {
                return file;
            }

            var image = await loadImage(file);
            var ratio = Math.min(settings.maxWidth / image.width, settings.maxHeight / image.height, 1);
            var targetWidth = Math.max(1, Math.round(image.width * ratio));
            var targetHeight = Math.max(1, Math.round(image.height * ratio));

            if (ratio === 1 && file.size <= 1024 * 1024) {
                return file;
            }

            var canvas = document.createElement('canvas');
            canvas.width = targetWidth;
            canvas.height = targetHeight;

            var context = canvas.getContext('2d', { alpha: true });
            context.drawImage(image, 0, 0, targetWidth, targetHeight);

            var blob = await canvasToBlob(canvas, settings.outputType, settings.quality);
            var extension = settings.outputType === 'image/png' ? 'png' : 'webp';
            var fileName = (file.name || 'image').replace(/\.[^.]+$/, '') + '.' + extension;

            if (blob.size >= file.size && ratio === 1) {
                return file;
            }

            return new File([blob], fileName, {
                type: blob.type,
                lastModified: Date.now()
            });
        }

        function createDataTransfer(files) {
            var transfer = new DataTransfer();
            files.forEach(function (file) {
                transfer.items.add(file);
            });

            return transfer;
        }

        function bindDropZone(element, onFiles) {
            if (!element) {
                return;
            }

            ['dragenter', 'dragover'].forEach(function (eventName) {
                element.addEventListener(eventName, function (event) {
                    event.preventDefault();
                    event.stopPropagation();
                    element.classList.add('border-primary');
                });
            });

            ['dragleave', 'dragend', 'drop'].forEach(function (eventName) {
                element.addEventListener(eventName, function (event) {
                    event.preventDefault();
                    event.stopPropagation();
                    element.classList.remove('border-primary');
                });
            });

            element.addEventListener('drop', function (event) {
                var files = Array.from((event.dataTransfer && event.dataTransfer.files) || []).filter(function (file) {
                    return file.type && file.type.indexOf('image/') === 0;
                });

                if (files.length) {
                    onFiles(files);
                }
            });
        }

        function updateFloorPlanLabels() {
            if (!floorPlanList) {
                return;
            }

            floorPlanList.querySelectorAll('[data-floor-plan-item]').forEach(function (item, index) {
                var title = item.querySelector('h6');
                if (title) {
                    title.textContent = 'Mat bang #' + (index + 1);
                }
            });
        }

        function bindFloorPlanItem(item) {
            if (!item) {
                return;
            }

            var imageBox = item.querySelector('.floor-plan-image-box');
            var fileInput = item.querySelector('.floor-plan-file-input');
            var previewImage = item.querySelector('.floor-plan-preview');
            var placeholderBox = item.querySelector('.floor-plan-placeholder');
            var removeButton = item.querySelector('.remove-floor-plan');

            function showFloorPlanPreview(src) {
                previewImage.src = src;
                previewImage.classList.remove('d-none');
                placeholderBox.classList.add('d-none');
            }

            async function applyFloorPlanImage(file) {
                if (!file) {
                    return;
                }

                var compressedFile = await compressImage(file, {
                    maxWidth: 1800,
                    maxHeight: 1800,
                    quality: 0.82
                });
                var transfer = createDataTransfer([compressedFile]);
                fileInput.files = transfer.files;

                var reader = new FileReader();
                reader.onload = function (event) {
                    showFloorPlanPreview(event.target.result);
                };
                reader.readAsDataURL(compressedFile);
            }

            if (imageBox && fileInput) {
                imageBox.addEventListener('click', function () {
                    fileInput.click();
                });

                fileInput.addEventListener('change', function (event) {
                    applyFloorPlanImage((event.target.files || [])[0]);
                });

                bindDropZone(imageBox, function (files) {
                    applyFloorPlanImage(files[0]);
                });
            }

            if (removeButton) {
                removeButton.addEventListener('click', function () {
                    var idInput = item.querySelector('input[name$="[id]"]');
                    if (idInput && idInput.value && removeFloorPlansContainer) {
                        var hiddenInput = document.createElement('input');
                        hiddenInput.type = 'hidden';
                        hiddenInput.name = 'remove_floor_plans[]';
                        hiddenInput.value = idInput.value;
                        removeFloorPlansContainer.appendChild(hiddenInput);
                    }

                    item.remove();
                    updateFloorPlanLabels();
                });
            }
        }

        function createFloorPlanItem(index) {
            var wrapper = document.createElement('div');
            wrapper.className = 'border rounded p-3 floor-plan-item';
            wrapper.setAttribute('data-floor-plan-item', '');
            wrapper.innerHTML = [
                '<div class="d-flex align-items-start justify-content-between gap-3 mb-3">',
                '<h6 class="mb-0">Mat bang #' + (index + 1) + '</h6>',
                '<button type="button" class="btn btn-outline-danger btn-sm remove-floor-plan">Xoa</button>',
                '</div>',
                '<input type="hidden" name="floor_plans[' + index + '][id]" value="">',
                '<input type="hidden" name="floor_plans[' + index + '][existing_image]" value="">',
                '<div class="row g-3 align-items-start">',
                '<div class="col-md-4">',
                '<input type="file" name="floor_plans[' + index + '][image_file]" class="d-none floor-plan-file-input" accept="image/*">',
                '<button type="button" class="border rounded bg-light d-flex align-items-center justify-content-center overflow-hidden p-0 w-100 floor-plan-image-box" style="height: 180px;">',
                '<div class="text-center text-muted px-3 floor-plan-placeholder">',
                '<div class="display-6 mb-2"><i class="ri-image-line"></i></div>',
                '<div class="fw-semibold">NO IMAGE</div>',
                '<div>Chon anh mat bang</div>',
                '</div>',
                '<img src="" alt="Floor plan" class="w-100 h-100 object-fit-cover floor-plan-preview d-none">',
                '</button>',
                '</div>',
                '<div class="col-md-8">',
                '<label class="form-label">Ten mat bang</label>',
                '<input type="text" name="floor_plans[' + index + '][name]" class="form-control" placeholder="Vi du: Mat bang tang 1">',
                '</div>',
                '</div>'
            ].join('');

            bindFloorPlanItem(wrapper);
            return wrapper;
        }

        function showPlaceholder() {
            preview.src = '';
            preview.classList.add('d-none');
            placeholder.classList.remove('d-none');
            removeButton.classList.add('d-none');
        }

        function showPreview(src) {
            preview.src = src;
            preview.classList.remove('d-none');
            placeholder.classList.add('d-none');
            removeButton.classList.remove('d-none');
        }

        async function applyMainImage(file) {
            if (!file) {
                return;
            }

            var compressedFile = await compressImage(file, {
                maxWidth: 1800,
                maxHeight: 1800,
                quality: 0.82
            });
            var transfer = createDataTransfer([compressedFile]);

            removeImageInput.value = '0';
            fileInput.files = transfer.files;

            var reader = new FileReader();
            reader.onload = function (event) {
                showPreview(event.target.result);
            };
            reader.readAsDataURL(compressedFile);
        }

        if (fileInput && previewBox && preview && placeholder && removeButton && removeImageInput) {
            previewBox.addEventListener('click', function () {
                fileInput.click();
            });

            fileInput.addEventListener('change', function (event) {
                var file = event.target.files[0];

                if (file) {
                    applyMainImage(file);
                }
            });

            removeButton.addEventListener('click', function () {
                fileInput.value = '';
                removeImageInput.value = '1';
                showPlaceholder();
            });

            bindDropZone(previewBox, function (files) {
                applyMainImage(files[0]);
            });
        }

        function updateSeoPreview() {
            if (!slugInput || !seoLinkPreview) {
                return;
            }

            var slug = slugInput.value || 'slug';
            var prefix = '{{ $type === 'product' ? 'san-pham' : 'tin-tuc' }}';
            seoLinkPreview.textContent = '{{ url('/') }}/' + prefix + '/' + slug;
        }

        if (slugInput) {
            slugInput.addEventListener('input', updateSeoPreview);
        }
        updateSeoPreview();

        function appendGalleryItem(typeKey, src, existingId, fileToken) {
            var galleryGrid = galleryGrids[typeKey];

            if (!galleryGrid) {
                return;
            }

            var wrapper = document.createElement('div');
            wrapper.className = 'position-relative border rounded overflow-hidden bg-light gallery-item';
            wrapper.setAttribute('data-gallery-item', '');
            wrapper.style.width = '72px';
            wrapper.style.height = '72px';

            var image = document.createElement('img');
            image.src = src;
            image.className = 'w-100 h-100 object-fit-cover';
            image.alt = 'Gallery';

            var button = document.createElement('button');
            button.type = 'button';
            button.className = 'btn btn-danger btn-sm position-absolute top-0 end-0 m-1 rounded-circle d-flex align-items-center justify-content-center remove-gallery-item';
            button.style.width = '20px';
            button.style.height = '20px';
            button.style.lineHeight = '1';
            button.textContent = 'x';

            if (existingId) {
                button.dataset.existingId = existingId;
            }

            if (fileToken) {
                button.dataset.fileToken = fileToken;
            }

            button.dataset.galleryType = typeKey;

            wrapper.appendChild(image);
            wrapper.appendChild(button);
            galleryGrid.appendChild(wrapper);
        }

        async function addGalleryFiles(typeKey, files) {
            var galleryInput = galleryInputs[typeKey];
            var galleryTransfer = galleryFiles[typeKey];

            if (!galleryInput || !galleryTransfer) {
                return;
            }

            for (let index = 0; index < files.length; index++) {
                let compressedFile = await compressImage(files[index], {
                    maxWidth: 1800,
                    maxHeight: 1800,
                    quality: 0.8
                });
                let currentToken = [compressedFile.name, compressedFile.size, compressedFile.lastModified].join('__');
                galleryTransfer.items.add(compressedFile);

                var reader = new FileReader();
                reader.onload = function (event) {
                    appendGalleryItem(typeKey, event.target.result, null, currentToken);
                };
                reader.readAsDataURL(compressedFile);
            }

            galleryInput.files = galleryTransfer.files;
        }

        document.querySelectorAll('.gallery-picker-trigger').forEach(function (button) {
            var typeKey = button.getAttribute('data-gallery-type');
            var galleryInput = galleryInputs[typeKey];
            var galleryGrid = galleryGrids[typeKey];

            if (!galleryInput || !galleryGrid) {
                return;
            }

            button.addEventListener('click', function () {
                galleryInput.click();
            });

            galleryInput.addEventListener('change', function (event) {
                addGalleryFiles(typeKey, Array.from(event.target.files || []));
            });

            bindDropZone(galleryGrid, function (files) {
                addGalleryFiles(typeKey, files);
            });
        });

        document.addEventListener('click', function (event) {
            var removeGalleryButton = event.target.closest('.remove-gallery-item');

            if (!removeGalleryButton) {
                return;
            }

            var existingId = removeGalleryButton.getAttribute('data-existing-id');
            var fileToken = removeGalleryButton.getAttribute('data-file-token');
            var galleryType = removeGalleryButton.getAttribute('data-gallery-type');
            var galleryGrid = galleryGrids[galleryType];
            var galleryInput = galleryInputs[galleryType];
            var galleryTransfer = galleryFiles[galleryType];

            if (existingId && galleryGrid) {
                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'remove_gallery_images[]';
                input.value = existingId;
                galleryGrid.appendChild(input);
            }

            if (fileToken && galleryInput && galleryTransfer) {
                var nextFiles = new DataTransfer();

                Array.from(galleryInput.files).forEach(function (file) {
                    var currentToken = [file.name, file.size, file.lastModified].join('__');

                    if (currentToken !== fileToken) {
                        nextFiles.items.add(file);
                    }
                });

                galleryFiles[galleryType] = nextFiles;
                galleryInput.files = galleryFiles[galleryType].files;
            }

            var galleryItem = removeGalleryButton.closest('[data-gallery-item]');
            if (galleryItem) {
                galleryItem.remove();
            }
        });

        if (floorPlanList) {
            floorPlanList.querySelectorAll('[data-floor-plan-item]').forEach(function (item) {
                bindFloorPlanItem(item);
            });
            updateFloorPlanLabels();
        }

        if (addFloorPlanButton && floorPlanList) {
            addFloorPlanButton.addEventListener('click', function () {
                floorPlanList.appendChild(createFloorPlanItem(floorPlanIndex));
                floorPlanIndex += 1;
                updateFloorPlanLabels();
            });
        }
    });
</script>
