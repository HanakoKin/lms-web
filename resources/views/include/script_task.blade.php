@section('script8')
<script type="text/javascript">
    $(document).ready(function() {
            $('#datatable').DataTable();
        });

    $(function() {
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
    });

</script>
@endsection
