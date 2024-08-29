<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LPKS SUKSES ABADI JAYA</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        .hidden {
            display: none;
        }

        .form-wrapper {
            display: flex;
            justify-content: space-between;
        }

        .form-column {
            width: 48%;
        }

        .form-section {
            margin-bottom: 30px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-section h5 {
            margin-top: 0;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }

        .form-section hr {
            border: 0;
            border-top: 1px solid #ddd;
            margin: 15px 0;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .radio-group {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Include Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Include Topbar -->
                <?php include 'topbar.php'; ?>

                <!-- Page Content -->
                <div class="container-fluid">
                    <div class="form-wrapper">
                        <!-- Left Column -->
                        <div class="form-column">
                            <div class="form-section">
                                <h5>Interview Appraisal (Penilaian Wawancara)</h5>

                                <div class="form-group">
                                    <label for="personality">Personality (Kepribadian):</label>
                                    <div class="radio-group">
                                        <label><input type="radio" id="personality_fair" name="personality" value="fair"> Fair (Cukup)</label>
                                        <label><input type="radio" id="personality_good" name="personality" value="good"> Good (Baik)</label>
                                        <label><input type="radio" id="personality_excellent" name="personality" value="excellent"> Excellent (Sangat Baik)</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="household_works">General Household Works (Pekerjaan Rumah Tangga Umum):</label>
                                    <div class="radio-group">
                                        <label><input type="radio" id="household_works_fair" name="household_works" value="fair"> Fair (Cukup)</label>
                                        <label><input type="radio" id="household_works_good" name="household_works" value="good"> Good (Baik)</label>
                                        <label><input type="radio" id="household_works_excellent" name="household_works" value="excellent"> Excellent (Sangat Baik)</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="cooking_chinese_food">Cooking Chinese Food (Memasak Makanan Cina):</label>
                                    <div class="radio-group">
                                        <label><input type="radio" id="cooking_chinese_food_fair" name="cooking_chinese_food" value="fair"> Fair (Cukup)</label>
                                        <label><input type="radio" id="cooking_chinese_food_good" name="cooking_chinese_food" value="good"> Good (Baik)</label>
                                        <label><input type="radio" id="cooking_chinese_food_excellent" name="cooking_chinese_food" value="excellent"> Excellent (Sangat Baik)</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nursing_infants">Nursing Infants (Merawat Bayi):</label>
                                    <div class="radio-group">
                                        <label><input type="radio" id="nursing_infants_fair" name="nursing_infants" value="fair"> Fair (Cukup)</label>
                                        <label><input type="radio" id="nursing_infants_good" name="nursing_infants" value="good"> Good (Baik)</label>
                                        <label><input type="radio" id="nursing_infants_excellent" name="nursing_infants" value="excellent"> Excellent (Sangat Baik)</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="care_of_young_children">Care of Young Children (Merawat Anak Kecil):</label>
                                    <div class="radio-group">
                                        <label><input type="radio" id="care_of_young_children_fair" name="care_of_young_children" value="fair"> Fair (Cukup)</label>
                                        <label><input type="radio" id="care_of_young_children_good" name="care_of_young_children" value="good"> Good (Baik)</label>
                                        <label><input type="radio" id="care_of_young_children_excellent" name="care_of_young_children" value="excellent"> Excellent (Sangat Baik)</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="care_of_elder">Care of Elder (Merawat Lansia):</label>
                                    <div class="radio-group">
                                        <label><input type="radio" id="care_of_elder_fair" name="care_of_elder" value="fair"> Fair (Cukup)</label>
                                        <label><input type="radio" id="care_of_elder_good" name="care_of_elder" value="good"> Good (Baik)</label>
                                        <label><input type="radio" id="care_of_elder_excellent" name="care_of_elder" value="excellent"> Excellent (Sangat Baik)</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="care_of_disable">Care of the Disable (Merawat Orang Cacat):</label>
                                    <div class="radio-group">
                                        <label><input type="radio" id="care_of_disable_fair" name="care_of_disable" value="fair"> Fair (Cukup)</label>
                                        <label><input type="radio" id="care_of_disable_good" name="care_of_disable" value="good"> Good (Baik)</label>
                                        <label><input type="radio" id="care_of_disable_excellent" name="care_of_disable" value="excellent"> Excellent (Sangat Baik)</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="housemaid_experience">Housemaid Experience (Pengalaman Sebagai Pembantu Rumah Tangga):</label>
                                    <div class="radio-group">
                                        <label><input type="radio" id="housemaid_experience_fair" name="housemaid_experience" value="fair"> Fair (Cukup)</label>
                                        <label><input type="radio" id="housemaid_experience_good" name="housemaid_experience" value="good"> Good (Baik)</label>
                                        <label><input type="radio" id="housemaid_experience_excellent" name="housemaid_experience" value="excellent"> Excellent (Sangat Baik)</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="spoken_cantonese">Spoken Cantonese (Kemampuan Bahasa Kanton):</label>
                                    <div class="radio-group">
                                        <label><input type="radio" id="spoken_cantonese_fair" name="spoken_cantonese" value="fair"> Fair (Cukup)</label>
                                        <label><input type="radio" id="spoken_cantonese_good" name="spoken_cantonese" value="good"> Good (Baik)</label>
                                        <label><input type="radio" id="spoken_cantonese_excellent" name="spoken_cantonese" value="excellent"> Excellent (Sangat Baik)</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="spoken_mandarin">Spoken Mandarin (Kemampuan Bahasa Mandarin):</label>
                                    <div class="radio-group">
                                        <label><input type="radio" id="spoken_mandarin_fair" name="spoken_mandarin" value="fair"> Fair (Cukup)</label>
                                        <label><input type="radio" id="spoken_mandarin_good" name="spoken_mandarin" value="good"> Good (Baik)</label>
                                        <label><input type="radio" id="spoken_mandarin_excellent" name="spoken_mandarin" value="excellent"> Excellent (Sangat Baik)</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="spoken_english">Spoken English (Kemampuan Bahasa Inggris):</label>
                                    <div class="radio-group">
                                        <label><input type="radio" id="spoken_english_fair" name="spoken_english" value="fair"> Fair (Cukup)</label>
                                        <label><input type="radio" id="spoken_english_good" name="spoken_english" value="good"> Good (Baik)</label>
                                        <label><input type="radio" id="spoken_english_excellent" name="spoken_english" value="excellent"> Excellent (Sangat Baik)</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="spoken_bahasa">Spoken Bahasa (Kemampuan Bahasa Indonesia):</label>
                                    <div class="radio-group">
                                        <label><input type="radio" id="spoken_bahasa_fair" name="spoken_bahasa" value="fair"> Fair (Cukup)</label>
                                        <label><input type="radio" id="spoken_bahasa_good" name="spoken_bahasa" value="good"> Good (Baik)</label>
                                        <label><input type="radio" id="spoken_bahasa_excellent" name="spoken_bahasa" value="excellent"> Excellent (Sangat Baik)</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="spoken_english">Care of Pets(Peduli Hewan):</label>
                                    <div class="radio-group">
                                        <label><input type="radio" id="spoken_english_fair" name="spoken_english" value="fair"> Fair (Cukup)</label>
                                        <label><input type="radio" id="spoken_english_good" name="spoken_english" value="good"> Good (Baik)</label>
                                        <label><input type="radio" id="spoken_english_excellent" name="spoken_english" value="excellent"> Excellent (Sangat Baik)</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="form-column" style="float: right; width: 50%;">
                            <div class="form-section">
                                <!-- Work Experience Section -->
                                <div class="form-section">
                                    <h5>Work Experience (Pengalaman Kerja)</h5>

                                    <div class="form-group">
                                        <label for="nursing_new_born">Newborn Care (Perawatan Bayi Baru Lahir):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="nursing_new_born_willing" name="nursing_new_born" value="willing"> Willing (Bersedia)</label>
                                            <label><input type="radio" id="nursing_new_born_experience" name="nursing_new_born" value="experience"> Experienced (Berpengalaman)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="taking_care_younger_children">Taking Care of Young Children (Merawat Anak-Anak Kecil):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="taking_care_younger_children_willing" name="taking_care_younger_children" value="willing"> Willing (Bersedia)</label>
                                            <label><input type="radio" id="taking_care_younger_children_experience" name="taking_care_younger_children" value="experience"> Experienced (Berpengalaman)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="taking_care_elderly">Taking Care of the Elderly (Merawat Lansia):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="taking_care_elderly_willing" name="taking_care_elderly" value="willing"> Willing (Bersedia)</label>
                                            <label><input type="radio" id="taking_care_elderly_experience" name="taking_care_elderly" value="experience"> Experienced (Berpengalaman)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="taking_care_disable">Taking Care of Disabled Individuals (Merawat Penyandang Disabilitas):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="taking_care_disable_willing" name="taking_care_disable" value="willing"> Willing (Bersedia)</label>
                                            <label><input type="radio" id="taking_care_disable_experience" name="taking_care_disable" value="experience"> Experienced (Berpengalaman)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="accompanying_children">Accompanying Children to School (Mengantar Anak ke Sekolah):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="accompanying_children_willing" name="accompanying_children" value="willing"> Willing (Bersedia)</label>
                                            <label><input type="radio" id="accompanying_children_experience" name="accompanying_children" value="experience"> Experienced (Berpengalaman)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cooking_chinese_food">Cooking Chinese Food (Memasak Masakan Cina):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="cooking_chinese_food_willing" name="cooking_chinese_food" value="willing"> Willing (Bersedia)</label>
                                            <label><input type="radio" id="cooking_chinese_food_experience" name="cooking_chinese_food" value="experience"> Experienced (Berpengalaman)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cooking_western_food">Cooking Western Food (Memasak Masakan Barat):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="cooking_western_food_willing" name="cooking_western_food" value="willing"> Willing (Bersedia)</label>
                                            <label><input type="radio" id="cooking_western_food_experience" name="cooking_western_food" value="experience"> Experienced (Berpengalaman)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cleaning">Cleaning (Membersihkan):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="cleaning_willing" name="cleaning" value="willing"> Willing (Bersedia)</label>
                                            <label><input type="radio" id="cleaning_experience" name="cleaning" value="experience"> Experienced (Berpengalaman)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="washing">Washing (Mencuci):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="washing_willing" name="washing" value="willing"> Willing (Bersedia)</label>
                                            <label><input type="radio" id="washing_experience" name="washing" value="experience"> Experienced (Berpengalaman)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="doing_laundry_by_hand">Doing the Laundry by Hand (Mencuci Pakaian dengan Tangan):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="doing_laundry_by_hand_willing" name="doing_laundry_by_hand" value="willing"> Willing (Bersedia)</label>
                                            <label><input type="radio" id="doing_laundry_by_hand_experience" name="doing_laundry_by_hand" value="experience"> Experienced (Berpengalaman)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="ironing">Ironing (Menyetrika):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="ironing_willing" name="ironing" value="willing"> Willing (Bersedia)</label>
                                            <label><input type="radio" id="ironing_experience" name="ironing" value="experience"> Experienced (Berpengalaman)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="sewing_clothes">Sewing Clothes (Menjahit Pakaian):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="sewing_clothes_willing" name="sewing_clothes" value="willing"> Willing (Bersedia)</label>
                                            <label><input type="radio" id="sewing_clothes_experience" name="sewing_clothes" value="experience"> Experienced (Berpengalaman)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="washing_car">Washing the Car (Mencuci Mobil):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="washing_car_willing" name="washing_car" value="willing"> Willing (Bersedia)</label>
                                            <label><input type="radio" id="washing_car_experience" name="washing_car" value="experience"> Experienced (Berpengalaman)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gardening">Gardening (Berkebun):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="gardening_willing" name="gardening" value="willing"> Willing (Bersedia)</label>
                                            <label><input type="radio" id="gardening_experience" name="gardening" value="experience"> Experienced (Berpengalaman)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="using_appliances">Using and Operating Household Appliances (Menggunakan dan Mengoperasikan Peralatan Rumah Tangga):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="using_appliances_willing" name="using_appliances" value="willing"> Willing (Bersedia)</label>
                                            <label><input type="radio" id="using_appliances_experience" name="using_appliances" value="experience"> Experienced (Berpengalaman)</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Questionnaire Section -->
                                <div class="form-section">
                                    <h5>Questionnaire (Kuesioner)</h5>

                                    <div class="form-group">
                                        <label for="handle_cook_pork">Will you handle and cook pork? (Apakah Anda bersedia menangani dan memasak daging babi?):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="handle_cook_pork_yes" name="handle_cook_pork" value="yes"> Yes (Ya)</label>
                                            <label><input type="radio" id="handle_cook_pork_no" name="handle_cook_pork" value="no"> No (Tidak)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="can_eat_pork">Can you eat pork? (Apakah Anda bisa makan daging babi?):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="can_eat_pork_yes" name="can_eat_pork" value="yes"> Yes (Ya)</label>
                                            <label><input type="radio" id="can_eat_pork_no" name="can_eat_pork" value="no"> No (Tidak)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="afraid_of_dog">Are you afraid of dogs? (Apakah Anda takut pada anjing?):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="afraid_of_dog_yes" name="afraid_of_dog" value="yes"> Yes (Ya)</label>
                                            <label><input type="radio" id="afraid_of_dog_no" name="afraid_of_dog" value="no"> No (Tidak)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="handle_pets">Will you handle and take care of dogs (or other pets)? (Apakah Anda bersedia merawat anjing (atau hewan peliharaan lainnya)?):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="handle_pets_yes" name="handle_pets" value="yes"> Yes (Ya)</label>
                                            <label><input type="radio" id="handle_pets_no" name="handle_pets" value="no"> No (Tidak)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="agree_employer_regulations">Are you agreeing to the employer's work regulations? (Apakah Anda setuju dengan peraturan kerja dari pemberi kerja?):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="agree_employer_regulations_yes" name="agree_employer_regulations" value="yes"> Yes (Ya)</label>
                                            <label><input type="radio" id="agree_employer_regulations_no" name="agree_employer_regulations" value="no"> No (Tidak)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="prepared_day_off">Are you prepared to take your day off set up by your employer? (Apakah Anda siap untuk mengambil hari libur yang diatur oleh pemberi kerja?):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="prepared_day_off_yes" name="prepared_day_off" value="yes"> Yes (Ya)</label>
                                            <label><input type="radio" id="prepared_day_off_no" name="prepared_day_off" value="no"> No (Tidak)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="prepared_to_give_up_day_off">Are you prepared to give up some of your day off to earn more in addition to your basic salary? (Apakah Anda bersedia untuk mengorbankan sebagian dari hari libur Anda untuk memperoleh lebih banyak penghasilan selain gaji pokok?):</label>
                                        <div class="radio-group">
                                            <label><input type="radio" id="prepared_to_give_up_day_off_yes" name="prepared_to_give_up_day_off" value="yes"> Yes (Ya)</label>
                                            <label><input type="radio" id="prepared_to_give_up_day_off_no" name="prepared_to_give_up_day_off" value="no"> No (Tidak)</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" formaction="upload_berkas.php">Simpan</button>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <!-- /.container-fluid -->
                        </div>
                        <!-- End of Main Content -->
                    </div>
                    <!-- End of Page Wrapper -->

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>
                    <!-- Include Footer -->
                    <?php include 'footer.php'; ?>

                    <!-- Logout Modal-->
                    <?php include 'logout_modal.php'; ?>

                    <!-- JavaScript Libraries -->
                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
                    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
                    <script src="js/sb-admin-2.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script src="js/sweetalert-utils.js" defer></script>
                    <script src="js/sweetalert-handler.js"></script>

                    <!-- Page-Level Demo Scripts - Tables -->
                    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>