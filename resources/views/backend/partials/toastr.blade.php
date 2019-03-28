
    @if(session()->has('success'))
    <script>toastr.success("{{session('success')}}")</script>
    @elseif(session()->has('error'))
    <script>toastr.success("{{session('error')}}")</script>
    @endif

