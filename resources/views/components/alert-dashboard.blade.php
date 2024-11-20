<div class="alert customize-alert alert-dismissible {{ isset($error) && !$error ? 'text-secondary alert-light-secondary bg-secondary-subtle' : 'text-danger alert-light-danger bg-danger-subtle' }} fade show remove-close-icon"
    role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <div class="d-flex align-items-center  me-3 me-md-0">
        <i class="ti ti-info-circle fs-5 me-2 {{ isset($error) && !$error ? 'text-secondary' : 'text-danger' }}"></i>
        {{ $slot }}
    </div>
</div>
