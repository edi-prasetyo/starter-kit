@extends('layouts.app')

@section('content')
    <div class="mb-3">
        <h3>Permission Role</h3>
        <small class="text-muted">
            Role: <strong>{{ $role->name }}</strong>
        </small>
    </div>

    <form method="POST" action="{{ route('permission-roles.update', $role->id) }}">
        @csrf
        @method('PUT')

        @foreach ($permissions as $group => $groupPermissions)
            <div class="card mb-3">
                <div class="card-header">
                    <label>
                        <input type="checkbox" class="select-all form-check-input" data-group="{{ $group }}">
                        {{ ucfirst($group) }}
                    </label>
                </div>

                <div class="card-body">
                    <div class="row">
                        @foreach ($groupPermissions as $permission)
                            <div class="col-md-4 mb-2">
                                <label class="form-check">
                                    <input class="form-check-input permission-{{ $group }}" type="checkbox"
                                        name="permissions[]" value="{{ $permission->id }}"
                                        {{ $role->permissions->contains($permission) ? 'checked' : '' }}>
                                    <span class="form-check-label">
                                        {{ $permission->name }}
                                    </span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach

        <div class="mt-3">
            <button class="btn btn-primary">
                Simpan Permission
            </button>

            <a href="{{ route('roles.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.select-all').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                document
                    .querySelectorAll('.permission-' + this.dataset.group)
                    .forEach(cb => cb.checked = this.checked);
            });
        });
    </script>
@endpush
