<!DOCTYPE html>
<html>
<head>
    <title>Başvurunuz Alındı</title>
</head>
<body>
    <h2>Öğrenci Bursu Başvurunuz Alındı</h2>
    <p>Sayın {{ $application->first_name }} {{ $application->last_name }},</p>
    <p>
        Alpaslan Otizm Vakfı'na yapmış olduğunuz
        {{ $application->track === 'domestic' ? 'Yurt İçi Öğrenci Bursu' : 'Yurt Dışı Öğrenci Bursu' }}
        başvurunuz tarafımıza ulaşmıştır. Başvurunuz ilgili ekibimiz tarafından incelenecek
        ve gerekli durumlarda sizinle iletişime geçilecektir.
    </p>
    <p>İlginiz için teşekkür ederiz.</p>
    <p>Alpaslan Otizm Vakfı</p>
</body>
</html>
