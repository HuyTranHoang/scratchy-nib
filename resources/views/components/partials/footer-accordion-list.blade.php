@props(['title','id'])

<div class="col-md-4 col-lg-3 col-xl-3 mx-auto tab-pane active footer-text-color" id="sitemap-tab-pane" role="tabpanel" aria-labelledby="sitemap-tab" tabindex="0">
    <h2 class="accordion-header d-lg-none">
        <button class="accordion-button border-bottom collapsed bg-secondary-color footer-text-color fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#{{$id}}" aria-expanded="false" aria-controls="{{$id}}">
            {{$title}}
        </button>
    </h2>
    <div id="{{$id}}" class="accordion-collapse collapse d-lg-block" data-bs-parent="#footerContent">
        <div class="accordion-body" id="footerContent">
            <h5 class="text-uppercase footer-text-color d-sm-none d-md-none d-lg-block">
                {{$title}}
            </h5>
            {{$slot}}
        </div>
    </div>
</div>
