@component('mail::message')
# رسالة اتصال جديدة

**الاسم:** {{ $contact->name }}  
**البريد الإلكتروني:** {{ $contact->email }}  
**الشركة:** {{ $contact->company }}  
**الهاتف:** {{ $contact->phone }}  
**الموضوع:** {{ $contact->subject }}

---

**الرسالة:**  
{{ $contact->message }}

@endcomponent

