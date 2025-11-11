<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-621NKDSC03"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-621NKDSC03');
    </script>

    <title>แคมเปญชินเซ็น น้ำส้ม - Viabus</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Prompt', sans-serif;
            background: linear-gradient(135deg, #ff9a56 0%, #ff6b35 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .logo-section {
            background: white;
            padding: 20px;
            text-align: center;
        }

        .logo-section img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .header {
            background: linear-gradient(135deg, #ff6b35 0%, #ff8c42 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .header p {
            font-size: 1em;
            opacity: 0.95;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .header .activity-name {
            font-size: 1.3em;
            font-weight: 700;
            margin: 20px 0;
            padding: 15px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            line-height: 1.5;
        }

        .header .prize-info {
            font-size: 1.05em;
            margin: 20px 0;
            padding: 15px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 10px;
            line-height: 1.7;
        }

        .header .terms-info {
            font-size: 0.85em;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            opacity: 0.9;
            line-height: 1.6;
        }

        .form-container {
            padding: 40px 30px;
        }

        .success-message {
            background: #4caf50;
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
            font-size: 0.95em;
        }

        input[type="text"],
        input[type="tel"] {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1em;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="tel"]:focus {
            outline: none;
            border-color: #ff6b35;
        }

        .file-upload {
            border: 2px dashed #e0e0e0;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            background: #f9f9f9;
        }

        .file-upload:hover {
            border-color: #ff6b35;
            background: #fff5f2;
        }

        .file-upload input[type="file"] {
            display: none;
        }

        .upload-icon {
            font-size: 3em;
            margin-bottom: 10px;
        }

        .file-list {
            margin-top: 15px;
            text-align: left;
        }

        .file-item {
            background: #f0f0f0;
            padding: 10px 15px;
            margin: 5px 0;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .file-item button {
            background: #ff6b35;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #ff6b35 0%, #ff8c42 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
        }

        .submit-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .error-message {
            color: #d32f2f;
            font-size: 0.9em;
            margin-top: 5px;
        }

        .instructions {
            background: #fff5f2;
            border-left: 4px solid #ff6b35;
            padding: 15px;
            margin-bottom: 25px;
            margin-left: -20px;
            margin-right: -20px;
            border-radius: 5px;
        }

        .instructions ul {
            margin-left: 20px;
            margin-top: 10px;
        }

        .instructions li {
            margin: 5px 0;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo-section">
            <img src="{{ asset('images/hero-shinsen (3).jpg') }}" alt="ShinSen Orange Juice" style="max-width: 66.67%;">
            <img src="{{ asset('images/ShinsenBanner.png') }}" alt="ShinSen Campaign Banner" style="margin-top: 15px;">
        </div>

        <div class="header">
            <h1>#โสดโปรดShinSen</h1>

            <p>น้ำผลไม้แท้ตรา ShinSen ชวนคุณร่วมสนุกในเดือนคนโสด<br>
            (11.11 = วันคนโสด) กับกิจกรรม</p>

            <div class="activity-name">
                "โสดดูแลตัวเองแบบดับเบิ้ลด้วย ShinSen C สูง"
            </div>

            <p style="margin-bottom: 12px;">
                <strong>วิธีร่วมสนุก:</strong><br>
                เพียงเดินไป 7-Eleven, Lotus's หรือ Lotus's go fresh<br>
                หาซื้อ ShinSen น้ำส้มแท้ 100% หรือน้ำส้มยูซุแท้ 100% จำนวน 2 ขวด<br>
                ถ่ายภาพคู่กับใบเสร็จ และ Submit ลงในฟอร์มด้านล่างนี้
            </p>
            <p>
                <strong>รางวัล:</strong><br>
                ลุ้นรับน้ำส้ม 6 ขวดและน้ำส้มยูซุ 5 ขวด<br>
                รวม 11 ขวด จำนวน 20 รางวัล<br>
                เอาไปดื่มดูแลตัวเองฟิน ๆ
            </p>

            <div class="terms-info">
                <p>*เงื่อนไขเป็นไปตามที่บริษัทกำหนด</p>
                <p style="margin-top: 10px;">
                    หมดเขต 20 พฤศจิกายน 2568 นี้<br>
                    ประกาศผลผู้โชคดี 21 พฤศจิกายน 2568<br>
                    บนแอปพลิเคชัน ViaBus และทาง เฟซบุ๊กเพจ ShinSen น้ำผลไม้แท้ เพื่อสุขภาพ
                </p>
            </div>
        </div>

        <div class="form-container">
            @if(session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            <div class="instructions">
                <strong>กติกาการร่วมสนุก</strong>
                <ul>
                    <li>กรอก ชื่อ-นามสกุล และเบอร์โทรศัพท์</li>
                    <li>อัปโหลดรูปถ่าย น้ำส้ม/น้ำส้มยูซุ ShinSen จำนวน 2 ขวด พร้อมใบเสร็จ</li>
                    <li>กดส่งเพื่อเข้าร่วมลุ้นรางวัล!</li>
                </ul>
            </div>

            <form action="{{ route('campaign.submit') }}" method="POST" enctype="multipart/form-data" id="campaignForm">
                @csrf

                <div class="form-group">
                    <label for="name">ชื่อ-นามสกุล *</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="กรอกชื่อ-นามสกุล" required>
                    @error('name')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone">เบอร์โทรศัพท์ *</label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="กรอกเบอร์โทรศัพท์" required>
                    @error('phone')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>คุณเคยทานน้ำส้ม ShinSen หรือไม่? *</label>
                    <div style="margin-top: 10px;">
                        <label style="display: flex; align-items: center; margin-bottom: 10px; cursor: pointer;">
                            <input type="radio" name="tried_shinsen" value="1" {{ old('tried_shinsen') == '1' ? 'checked' : '' }} required style="margin-right: 8px; width: auto;">
                            <span>เคย</span>
                        </label>
                        <label style="display: flex; align-items: center; cursor: pointer;">
                            <input type="radio" name="tried_shinsen" value="0" {{ old('tried_shinsen') == '0' ? 'checked' : '' }} required style="margin-right: 8px; width: auto;">
                            <span>ไม่เคย</span>
                        </label>
                    </div>
                    @error('tried_shinsen')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>อัพโหลดรูปภาพ (น้ำส้ม & ใบเสร็จ) *</label>
                    <div class="file-upload" onclick="document.getElementById('fileInput').click()">
                        <div class="upload-icon">📸</div>
                        <p><strong>คลิกเพื่ออัพโหลดรูปภาพ</strong></p>
                        <p style="color: #666; font-size: 0.9em; margin-top: 5px;">
                            อัพโหลดรูปภาพชินเซ็น น้ำส้ม และใบเสร็จ<br>
                            (JPG, PNG, GIF - ไม่เกิน 10MB ต่อไฟล์)
                        </p>
                        <input type="file" id="fileInput" name="files[]" multiple accept="image/*" required>
                    </div>
                    <div class="file-list" id="fileList"></div>
                    @error('files')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    @error('files.*')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="submit-btn" id="submitBtn">
                    ส่งข้อมูล
                </button>
            </form>
        </div>
    </div>

    <script>
        const fileInput = document.getElementById('fileInput');
        const fileList = document.getElementById('fileList');
        const submitBtn = document.getElementById('submitBtn');
        let selectedFiles = [];

        fileInput.addEventListener('change', function(e) {
            const files = Array.from(e.target.files);

            files.forEach(file => {
                if (!selectedFiles.find(f => f.name === file.name && f.size === file.size)) {
                    selectedFiles.push(file);
                }
            });

            updateFileList();
        });

        function updateFileList() {
            fileList.innerHTML = '';

            if (selectedFiles.length > 0) {
                selectedFiles.forEach((file, index) => {
                    const fileItem = document.createElement('div');
                    fileItem.className = 'file-item';
                    fileItem.innerHTML = `
                        <span>${file.name} (${(file.size / 1024 / 1024).toFixed(2)} MB)</span>
                        <button type="button" onclick="removeFile(${index})">ลบ</button>
                    `;
                    fileList.appendChild(fileItem);
                });
            }

            // Update submit button state
            submitBtn.disabled = selectedFiles.length === 0;
        }

        function removeFile(index) {
            selectedFiles.splice(index, 1);

            // Update the file input
            const dataTransfer = new DataTransfer();
            selectedFiles.forEach(file => dataTransfer.items.add(file));
            fileInput.files = dataTransfer.files;

            updateFileList();
        }

        // Initial check
        updateFileList();
    </script>
</body>
</html>
