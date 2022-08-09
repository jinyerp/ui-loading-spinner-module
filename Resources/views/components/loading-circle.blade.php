<div wire:loading.delay>
    <div style="display: flex; justify-content:center; align-items:center;
    background-color: rgba(0,0,0,0.3);
    position:fixed; top:0px; left:0px;z-index:9999;
    width:100%;height:100%;">
        <!-- loading Spinner -->
        <div class="loading loading--full-height"></div>
    </div>
</div>

@push('css')
<style>
    .loading {
        display:flex;
        justify-content: center;
    }

    .loading::after {
        content: "";
        width:100px;
        height:100px;
        background:red;
        border:20px solid #cccccc;
        border-top-color:#333333;
        border-radius: 50%;
        animation: loading 1s linear infinite;
    }

    @keyframes loading {
        to {
            transform: rotate(1turn);
        }
    }
</style>
@endpush
