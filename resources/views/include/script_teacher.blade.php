@section('script2')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable2').DataTable();
        });

        function editteacher(id) {

            console.log(id);

            $.ajax({
                url: "{{ url('dashboard/teacher/detailedit') }}" + "/" + id,
                dataType: "json",
                type: 'get',
                success: function(status) {
                    $('#editidteacher').val(status.id);
                    $('#editnameteacher').val(status.name);
                    $('#editusernameteacher').val(status.username);
                    $('#editgenderteacher').val(status.jenis_kelamin);
                    $('#editnipteacher').val(status.nip);
                    $('#editaddressteacher').val(status.alamat);
                    $('#editemailteacher').val(status.email);
                },
            });
        }
    </script>
@endsection
