@section('script4')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable4').DataTable();
        });

        function editsubject(id) {

            console.log(id);

            $.ajax({
                url: "{{ url('dashboard/subject/detailedit') }}" + "/" + id,
                dataType: "json",
                type: 'get',
                success: function(status) {
                    $('#editidsubject').val(status.id);
                    $('#editnamesubject').val(status.name);
                },
            });
        }
    </script>
@endsection
