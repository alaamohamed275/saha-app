<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>رسالة تواصل جديدة</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h1>تم استلام رسالة تواصل جديدة</h1>
    
    <p><strong>الاسم:</strong> {{ $contact->name }}</p>

    @if($contact->company)
        <p><strong>الشركة:</strong> {{ $contact->company }}</p>
    @endif

    <p><strong>البريد الإلكتروني:</strong> {{ $contact->email }}</p>

    @if($contact->phone)
        <p><strong>رقم الهاتف:</strong> {{ $contact->phone }}</p>
    @endif

    <p><strong>الموضوع:</strong> {{ $contact->subject }}</p>

    <h3>الرسالة:</h3>
    <p>{{ $contact->message }}</p>

    <p>تم الاستلام في: {{ $contact->created_at->format('Y-m-d H:i:s') }}</p>
</body>
</html>
