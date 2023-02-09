<input type='button' id='button' value='Click me' />

<!-- Script -->
<div id="table"></div>

<!-- Script -->
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script>
<!-- <script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            url: "http://127.0.0.1:8000/api/siswa",
            // url: "http://localhost/coba-api/api.php",
            // url: "https://api.stevanandreas.com/api.php",
            success: function(result) {
                // result = JSON.parse(result);

                let table = `<table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIS</th>
                                <th scope="col">No HP</th>
                                </tr>
                            </thead>
                            <tbody>`;

                let no = 1;

                for (const v of result) {
                    table += `  <tr>
                                    <th scope="row">${no}</th>
                                    <td>${v.nama}</td>
                                    <td>${v.nis}</td>
                                    <td>${v.no_hp}</td>
                                </tr>`;
                    no++;
                }
                $("#table").html(table);
            },
        });
    });
</script> -->
<script>
    $.ajax({
        type: 'GET',
        url: 'https://api.stevanandreas.com/api.php',
        success: function(result) {
            result = JSON.parse(result);
            console.log(result);

            let table = `<table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                </tr>
                            </thead>
                            <tbody>`;

                let no = 1;

                for (const v of result) {
                    table += `  <tr>
                                    <th scope="row">${no}</th>
                                    <td><img src="${v.gambar}"></td>
                                    <td>${v.nama}</td>
                                    <td>Rp${v.harga}</td>
                                </tr>`;
                    no++;
                }
                $("#table").html(table);
        }
    })
</script>