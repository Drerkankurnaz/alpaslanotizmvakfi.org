<!DOCTYPE html>
<html>
<head>
    <title>Kariyer Başvuru Formu</title>
</head>
<body>
    <h2>Yeni Kariyer Başvurusu</h2>
    <p><strong>İsim:</strong> {{ $data['name'] }}</p>
    <p><strong>E-posta:</strong> {{ $data['email'] }}</p>
    <p><strong>Telefon:</strong> {{ $data['phone'] }}</p>
    <p><strong>Mesaj:</strong> {{ $data['content'] }}</p>
</body>
</html> 