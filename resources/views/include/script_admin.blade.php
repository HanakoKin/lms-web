@section('script1')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
        });

        function edit(id) {

            console.log(id);

            $.ajax({
                url: "{{ url('dashboard/admins/detailedit') }}" + "/" + id,
                dataType: "json",
                success: function(status) {
                    $('#editid').val(status.id);
                    $('#editname').val(status.name);
                    $('#editusername').val(status.username);
                    $('#editgender').val(status.jenis_kelamin);
                    $('#editaddress').val(status.alamat);
                    $('#editemail').val(status.email);
                },
            });
        }
    </script>
@endsection
