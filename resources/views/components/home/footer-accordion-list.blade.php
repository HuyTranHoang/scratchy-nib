@props(['title','id'])
<div class="col-md-4 col-lg-4 pt-3 footer-text-color"  role="tabpanel" >
    <h2 class="accordion-header d-lg-none">
        <button class="accordion-button border-bottom collapsed bg-secondary-color footer-text-color fw-semibold d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#{{$id}}" aria-expanded="false" aria-controls="{{$id}}">
            {{$title}}
        </button>
    </h2>
    <div id="{{$id}}" class="accordion-collapse collapse d-lg-block d-md-block float-md-end float-lg-end" data-bs-parent="#footerContent">
            <h5 class="text-uppercase footer-text-color d-none d-md-block">
                {{$title}}
            </h5>
            {{$slot}}
    </div>
</div>
