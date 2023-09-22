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
            background-color: #0dcaf0;
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
            border-color: #343a40;
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
            background-color:  $yellow;
        }
    </style>
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <div class="max-full rounded border overflow-hidden shadow-lg">
            <div class="px-6 py-4">
                <h3 class="text-center">Ubah Data</h3>
                <?php foreach ($guru as $data_guru): ?>
                    <form action="<?php echo base_url('admin/aksi_ubah_guru') ?>" enctype="multipart/form-data"
                        method="post" class="row">
                        <input name="id_guru" type="hidden" value="<?php echo $data_guru->id_guru ?>">
                        <div class="mb-3 col-6">
                            <label for="nama" class="form-label">Nama Guru</label>
                            <input type="text" class="form-control" id="nama" name="nama" type="text"
                                value="<?php echo $data_guru->nama_guru ?>">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="nisn" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" type="number"
                                value="<?php echo $data_guru->nik ?>">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" class="form-select">
                                <option selected value="<?php echo $data_guru->gender ?>">
                                    <?php echo $data_guru->gender ?>
                                </option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3 col-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="mapel">
                                Mapel
                            </label>
                            <select class="form-control" id="mapel" name="mapel" required>
                                <option selected value="<?php $data_guru->id_mapel ?>">
                                    <?php echo tampil_full_mapel_byid($data_guru->id_mapel) ?>
                                </option>
                                <?php foreach ($mapel as $row): ?>
                                    <option value="<?php echo $row->id ?>">
                                        <?php echo $row->nama_mapel ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <!-- <div class="d-grid gap-2 d-md-block"> -->
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <!-- </div> -->
                </div>
                </form>
            <?php endforeach ?>
        </div>

</body>

</html>