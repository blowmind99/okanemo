<a href="{{ ($mode == 'dark-mode') ? url('backend/site-setting/SM01L?theme=skin_mode&value=light-mode') : url('backend/site-setting/SM01D?theme=skin_mode&value=dark-mode') }}">
    <em class="icon ni {{ ($mode == 'dark-mode') ? 'ni-sun' : 'ni-moon' }}"></em>
    <span>{{ ($mode == 'dark-mode') ? 'Light mode' : 'Dark mode' }}</span>
</a>

