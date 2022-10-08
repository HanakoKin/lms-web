@section('script3')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable3').DataTable();
        });

        function editstudent(id) {

            console.log(id);

            $.ajax({
                url: "{{ url('dashboard/student/detailedit') }}" + "/" + id,
                dataType: "json",
                type: 'get',
                success: function(status) {
                    $('#editidstudent').val(status.id);
                    $('#editnamestudent').val(status.name);
                    $('#editusernamestudent').val(status.username);
                    $('#editnisstudent').val(status.nis);
                    $('#editgenderstudent').val(status.jenis_kelamin);
                    $('#editaddressstudent').val(status.alamat);
                    $('#editdateofbirthstudent').val(status.tanggal_lahir);
                    $('#editclassstudent').val(status.kelas);
                    $('#editmajorstudent').val(status.jurusan);
                    $('#editemailstudent').val(status.email);
                },
            });
        }
    </script>
@endsection
