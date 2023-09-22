<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
            background-color: #6c757d;
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

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
    <div class="max-full rounded border overflow-hidden shadow-lg">
    <div class="px-6 py-4">  
        <h3 class="text-center">Ubah Data</h3>
        <?php foreach ($siswa as $data_siswa): ?>
            <form action="<?php echo base_url('admin/aksi_ubah_siswa') ?>" enctype="multipart/form-data" method="post"
                class="row">
                <input name="id_siswa" type="hidden" value="<?php echo $data_siswa->id_siswa ?>">
                <div class="mb-3 col-6">
                    <label for="nama" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" type="text"
                        value="<?php echo $data_siswa->nama_siswa ?>">
                </div>
                <div class="mb-3 col-6">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" type="number"
                        value="<?php echo $data_siswa->nisn ?>">
                </div>
                <div class="mb-3 col-6">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" class="form-select">
                        <option selected value="<?php echo $data_siswa->gender ?>">
                            <?php echo $data_siswa->gender ?>
                        </option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select name="id_kelas" class="form-select">
                        <option selected value="<?php echo $data_siswa->id_kelas ?>">
                            <?php echo tampil_full_kelas_byid($data_siswa->id_kelas) ?></option>
                        <?php foreach ($kelas as $row) : ?>
                        <option value="<?php echo $row->id ?>">
                            <?php echo $row->tingkat_kelas . ' ' . $row->jurusan_kelas ?>
                        </option>
                        <?php endforeach ?>
                    </select>

                </div>
                    <!-- <div class="d-grid gap-2 d-md-block"> -->
                    <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        <?php endforeach ?>
    </div>
</body>

</html>