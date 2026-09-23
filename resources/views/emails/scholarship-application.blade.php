<!DOCTYPE html>
<html>
<head>
    <title>Yeni Öğrenci Bursu Başvurusu</title>
</head>
<body>
    @php
        $a = $application;
    @endphp
    <h2>Yeni Öğrenci Bursu Başvurusu — {{ $a->track === 'domestic' ? 'Yurt İçi' : 'Yurt Dışı' }}</h2>

    <p><strong>Burs Türü:</strong> {{ $a->scholarship_type }}</p>
    <p><strong>Ad Soyad:</strong> {{ $a->first_name }} {{ $a->last_name }}</p>
    <p><strong>Doğum Yılı:</strong> {{ $a->birth_year }}</p>

    @if($a->track === 'domestic')
        <p><strong>İl:</strong> {{ $a->province }}</p>
    @else
        <p><strong>Öğrenim Görülen Ülke:</strong> {{ $a->study_country }}</p>
        <p><strong>Şehir:</strong> {{ $a->study_city }}</p>
        <p><strong>Öğrenim Dili:</strong> {{ $a->study_language }}</p>
        <p><strong>Kayıt Durumu:</strong> {{ $a->enrollment_status }}</p>
        <p><strong>Yıllık Öğrenim Ücreti:</strong> {{ $a->annual_tuition_amount }} {{ $a->annual_tuition_currency }}</p>
    @endif

    <p><strong>Kayıtlı Olduğu Okul/Kurum:</strong> {{ $a->institution_name }}</p>
    <p><strong>Eğitim Kademesi:</strong> {{ $a->education_level }}</p>
    <p><strong>Sınıf/Yıl:</strong> {{ $a->grade_year }}</p>
    <p><strong>Not Ortalaması:</strong> {{ $a->gpa_value }} ({{ $a->gpa_scale }})</p>
    <p><strong>Başka Kurumdan Alınan Burs/Kredi:</strong> {{ $a->other_scholarship_info ?: '-' }}</p>

    <p><strong>Veli/Vasi Yakınlığı:</strong> {{ $a->guardian_relationship }}</p>
    <p><strong>E-posta:</strong> {{ $a->guardian_email }}</p>
    <p><strong>Telefon:</strong> {{ $a->guardian_phone }}</p>
    <p><strong>Destek İhtiyacı:</strong> {{ $a->support_need_description }}</p>

    <p>Yüklenen belgeleri görüntülemek için lütfen yönetim panelini kullanın.</p>
</body>
</html>
