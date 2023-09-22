<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tailwindcss.com/2.2.19/tailwind.min.css" rel="stylesheet">

    <style>
        /* Center the container vertically */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Style the card */
        .card {
            background-color: #e9ecef;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 480px;
            padding: 1rem;
        }

        /* Style the form elements */
        .form-input {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.25rem;
            outline: none;
            transition: border-color 0.2s;
        }

        .form-input:focus {
            border-color: #4299e1;
        }

        /* Style the submit button */
        .submit-button {
            background-color: #4299e1;
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .submit-button:hover {
            background-color: #3182ce;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <form action="<?php echo base_url('admin/aksi_Tambah_siswa') ?>" enctype="multipart/form-data" method="post">
                <p class="text-xl font-bold text-center">Tambah Siswa</p>
                <div class="grid grid-cols-2 gap-4 mt-5">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Nama Siswa</label>
                        <input class="form-input" id="nama" name="nama" type="text" placeholder="Nama">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nisn">NISN</label>
                        <input class="form-input" id="nisn" name="nisn" type="number" placeholder="NISN">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-input">
                            <option selected>Pilih Gender</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3 col-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="kelas">Kelas</label>
                            <select name="id_kelas" id="kelas" class="form-input">
                                <option selected>Pilih Kelas</option>
                                <?php foreach($kelas as $row): ?>
                                <option value="<?php echo $row->id ?>">
                                    <?php echo $row->tingkat_kelas.' '.$row->jurusan_kelas ?>
                                </option>
                                <?php endforeach ?>
                            </select>
                    </div>
                    <button type="submit" class="submit-button">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
