<table class="table">
    <thead>
        <tr>
            <th scope="col">Jurusan Id</th>
            <th scope="col">Nama Jurusan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $id) {
            echo "<tr>";

            echo "<td>" . $id['jurusan_id'] . "</td>";
            echo "<td>" . $id['nama_jurusan'] . "</td>";

        }
        echo "</tr>";


        ?>

    </tbody>
</table>