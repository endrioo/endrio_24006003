<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mahasiswa - Sweet Alert & AJAX</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.20/sweetalert2.min.css" rel="stylesheet">
    
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .table th {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border: none;
        }
        .btn-gradient {
            background: linear-gradient(45deg, #667eea, #764ba2);
            border: none;
            color: white;
        }
        .btn-gradient:hover {
            background: linear-gradient(45deg, #764ba2, #667eea);
            color: white;
            transform: translateY(-2px);
        }
        .header-title {
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white border-0 text-center py-4">
                        <h2 class="header-title fw-bold mb-0">
                            <i class="fas fa-graduation-cap me-2"></i>
                            Manajemen Data Mahasiswa
                        </h2>
                        <p class="text-muted mt-2">Sistem CRUD dengan Sweet Alert & AJAX</p>
                    </div>
                    <div class="card-body">
                        <!-- Form Input -->
                        <div class="row mb-4">
                            <div class="col-lg-4">
                                <div class="card border-0 bg-light">
                                    <div class="card-body">
                                        <h5 class="card-title text-center mb-3">
                                            <i class="fas fa-user-plus text-primary me-2"></i>
                                            <span id="form-title">Tambah Mahasiswa</span>
                                        </h5>
                                        <form id="mahasiswaForm">
                                            <input type="hidden" id="editId" value="">
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="fas fa-id-card text-primary me-2"></i>NIM
                                                </label>
                                                <input type="text" class="form-control" id="nim" placeholder="Contoh: 12345678" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="fas fa-user text-primary me-2"></i>Nama Mahasiswa
                                                </label>
                                                <input type="text" class="form-control" id="nama" placeholder="Nama lengkap mahasiswa" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="fas fa-graduation-cap text-primary me-2"></i>Jurusan
                                                </label>
                                                <select class="form-select" id="jurusan" required>
                                                    <option value="">Pilih Jurusan</option>
                                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                                    <option value="Teknik Komputer">Teknik Komputer</option>
                                                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="fas fa-envelope text-primary me-2"></i>Email
                                                </label>
                                                <input type="email" class="form-control" id="email" placeholder="email@example.com" required>
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-gradient" id="submitBtn">
                                                    <i class="fas fa-save me-2"></i>Simpan Data
                                                </button>
                                                <button type="button" class="btn btn-secondary" id="cancelBtn" style="display: none;">
                                                    <i class="fas fa-times me-2"></i>Batal Edit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Tabel Data -->
                            <div class="col-lg-8">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">
                                            <i class="fas fa-list text-success me-2"></i>
                                            Data Mahasiswa
                                        </h5>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>NIM</th>
                                                        <th>Nama</th>
                                                        <th>Jurusan</th>
                                                        <th>Email</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="mahasiswaTable">
                                                    <!-- Data akan dimuat di sini -->
                                                </tbody>
                                            </table>
                                            <div id="emptyState" class="text-center py-4" style="display: none;">
                                                <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                                                <p class="text-muted">Belum ada data mahasiswa. Silakan tambah data baru.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- Sweet Alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.20/sweetalert2.min.js"></script>
    
    <script>
        // Simulasi database menggunakan localStorage
        let mahasiswaData = JSON.parse(localStorage.getItem('mahasiswaData')) || [];
        let editingId = null;

        // Load data saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            loadMahasiswaData();
        });

        // Handle form submit
        document.getElementById('mahasiswaForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const nim = document.getElementById('nim').value;
            const nama = document.getElementById('nama').value;
            const jurusan = document.getElementById('jurusan').value;
            const email = document.getElementById('email').value;
            const editId = document.getElementById('editId').value;

            // Validasi NIM duplikat
            const existingNim = mahasiswaData.find(m => m.nim === nim && m.id != editId);
            if (existingNim) {
                Swal.fire({
                    icon: 'error',
                    title: 'NIM Sudah Ada!',
                    text: 'NIM tersebut sudah digunakan oleh mahasiswa lain.',
                    confirmButtonColor: '#667eea'
                });
                return;
            }

            // Simulasi AJAX dengan setTimeout
            Swal.fire({
                title: 'Menyimpan Data...',
                allowOutsideClick: false,
                allowEscapeKey: false,
                showConfirmButton: false,
                willOpen: () => {
                    Swal.showLoading();
                }
            });

            setTimeout(() => {
                if (editId) {
                    // Update data
                    const index = mahasiswaData.findIndex(m => m.id == editId);
                    if (index !== -1) {
                        mahasiswaData[index] = {
                            id: editId,
                            nim: nim,
                            nama: nama,
                            jurusan: jurusan,
                            email: email,
                            created_at: mahasiswaData[index].created_at,
                            updated_at: new Date().toISOString()
                        };
                    }
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Data Berhasil Diupdate!',
                        text: `Data mahasiswa ${nama} telah diperbarui.`,
                        confirmButtonColor: '#667eea'
                    });
                } else {
                    // Tambah data baru
                    const newMahasiswa = {
                        id: Date.now(),
                        nim: nim,
                        nama: nama,
                        jurusan: jurusan,
                        email: email,
                        created_at: new Date().toISOString(),
                        updated_at: new Date().toISOString()
                    };
                    
                    mahasiswaData.push(newMahasiswa);
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Data Berhasil Ditambahkan!',
                        text: `Mahasiswa ${nama} telah ditambahkan ke sistem.`,
                        confirmButtonColor: '#667eea'
                    });
                }

                // Simpan ke localStorage
                localStorage.setItem('mahasiswaData', JSON.stringify(mahasiswaData));
                
                // Reset form dan reload data
                resetForm();
                loadMahasiswaData();
            }, 1500);
        });

        // Load dan tampilkan data mahasiswa
        function loadMahasiswaData() {
            const tableBody = document.getElementById('mahasiswaTable');
            const emptyState = document.getElementById('emptyState');
            
            if (mahasiswaData.length === 0) {
                tableBody.innerHTML = '';
                emptyState.style.display = 'block';
                return;
            }
            
            emptyState.style.display = 'none';
            
            let html = '';
            mahasiswaData.forEach((mahasiswa, index) => {
                html += `
                    <tr>
                        <td>${index + 1}</td>
                        <td><span class="badge bg-primary">${mahasiswa.nim}</span></td>
                        <td>${mahasiswa.nama}</td>
                        <td>${mahasiswa.jurusan}</td>
                        <td>${mahasiswa.email}</td>
                        <td>
                            <button class="btn btn-warning btn-sm me-1" onclick="editMahasiswa(${mahasiswa.id})">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger btn-sm" onclick="deleteMahasiswa(${mahasiswa.id}, '${mahasiswa.nama}')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                `;
            });
            
            tableBody.innerHTML = html;
        }

        // Edit mahasiswa
        function editMahasiswa(id) {
            const mahasiswa = mahasiswaData.find(m => m.id === id);
            if (mahasiswa) {
                document.getElementById('editId').value = mahasiswa.id;
                document.getElementById('nim').value = mahasiswa.nim;
                document.getElementById('nama').value = mahasiswa.nama;
                document.getElementById('jurusan').value = mahasiswa.jurusan;
                document.getElementById('email').value = mahasiswa.email;
                
                document.getElementById('form-title').textContent = 'Edit Mahasiswa';
                document.getElementById('submitBtn').innerHTML = '<i class="fas fa-save me-2"></i>Update Data';
                document.getElementById('cancelBtn').style.display = 'block';
                
                editingId = id;
                
                // Scroll ke form
                document.getElementById('mahasiswaForm').scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Delete mahasiswa
        function deleteMahasiswa(id, nama) {
            Swal.fire({
                title: 'Hapus Data Mahasiswa?',
                text: `Apakah Anda yakin ingin menghapus data mahasiswa "${nama}"? Data yang dihapus tidak dapat dikembalikan.`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Simulasi AJAX delete
                    Swal.fire({
                        title: 'Menghapus Data...',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        showConfirmButton: false,
                        willOpen: () => {
                            Swal.showLoading();
                        }
                    });
                    
                    setTimeout(() => {
                        // Hapus dari array
                        mahasiswaData = mahasiswaData.filter(m => m.id !== id);
                        
                        // Simpan ke localStorage
                        localStorage.setItem('mahasiswaData', JSON.stringify(mahasiswaData));
                        
                        // Reload data
                        loadMahasiswaData();
                        
                        Swal.fire({
                            icon: 'success',
                            title: 'Data Berhasil Dihapus!',
                            text: `Data mahasiswa "${nama}" telah dihapus dari sistem.`,
                            confirmButtonColor: '#667eea'
                        });
                        
                        // Reset form jika sedang edit mahasiswa yang dihapus
                        if (editingId === id) {
                            resetForm();
                        }
                    }, 1000);
                }
            });
        }

        // Reset form
        function resetForm() {
            document.getElementById('mahasiswaForm').reset();
            document.getElementById('editId').value = '';
            document.getElementById('form-title').textContent = 'Tambah Mahasiswa';
            document.getElementById('submitBtn').innerHTML = '<i class="fas fa-save me-2"></i>Simpan Data';
            document.getElementById('cancelBtn').style.display = 'none';
            editingId = null;
        }

        // Handle cancel edit
        document.getElementById('cancelBtn').addEventListener('click', function() {
            resetForm();
            
            Swal.fire({
                icon: 'info',
                title: 'Edit Dibatalkan',
                text: 'Form telah direset untuk menambah data baru.',
                timer: 1500,
                showConfirmButton: false
            });
        });

        // Demo data - uncomment untuk menambah data contoh
        /*
        if (mahasiswaData.length === 0) {
            const demoData = [
                { id: 1, nim: '12345001', nama: 'Ahmad Rizki', jurusan: 'Teknik Informatika', email: 'ahmad@email.com', created_at: new Date().toISOString(), updated_at: new Date().toISOString() },
                { id: 2, nim: '12345002', nama: 'Siti Nurhaliza', jurusan: 'Sistem Informasi', email: 'siti@email.com', created_at: new Date().toISOString(), updated_at: new Date().toISOString() },
                { id: 3, nim: '12345003', nama: 'Budi Santoso', jurusan: 'Teknik Komputer', email: 'budi@email.com', created_at: new Date().toISOString(), updated_at: new Date().toISOString() }
            ];
            mahasiswaData = demoData;
            localStorage.setItem('mahasiswaData', JSON.stringify(mahasiswaData));
            loadMahasiswaData();
        }
        */
    </script>
</body>
</html>