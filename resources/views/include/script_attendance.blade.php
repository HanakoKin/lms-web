@section('script5')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable5').DataTable();
        });
        $(".search").change(function() {
            $('#form').submit();
        });
    </script>
@endsection
