@if (session()->has('alert_message'))
    <div class="alert alert-{{ session('alert_level') }} {{ session('alert_level') == 'danger' ? '' : 'alert-dismissable' }}">
        <div class="container-fluid">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="material-icons">clear</i></span>
            </button>
            <div class="center">
                <div class="alert-icon" style="display: inline-block;">
                    <i class="material-icons">{{ session('alert_icon') }}</i>
                    {{ session('alert_message') }}.
                </div>
            </div>
        </div>
    </div>
@endif
