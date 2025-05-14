@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2 class="mb-4 text-right">معلومات التواصل</h2>

    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <!-- Contact Information -->
                <div class="col-md-6">
                    <div class="contact-info-section">
                        <h4 class="text-right mb-3"><i class="fas fa-phone-alt ml-2"></i> معلومات الاتصال</h4>
                        
                        <div class="info-item mb-3">
                            <label class="font-weight-bold">رقم الهاتف:</label>
                            <p>{{ $contact->phone ?? 'غير محدد' }}</p>
                        </div>
                        
                        <div class="info-item mb-3">
                            <label class="font-weight-bold">البريد الإلكتروني:</label>
                            <p>{{ $contact->email ?? 'غير محدد' }}</p>
                        </div>
                        
                        <div class="info-item mb-3">
                            <label class="font-weight-bold">العنوان:</label>
                            <p>{{ $contact->address ?? 'غير محدد' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media Links -->
                <div class="col-md-6">
                    <div class="social-media-section">
                        <h4 class="text-right mb-3"><i class="fas fa-share-alt ml-2"></i> وسائل التواصل الاجتماعي</h4>
                        
                        <div class="info-item mb-3">
                            <label class="font-weight-bold">فيسبوك:</label>
                            @if($contact->facebook)
                                <p><a href="{{ $contact->facebook }}" target="_blank">{{ $contact->facebook }}</a></p>
                            @else
                                <p>غير محدد</p>
                            @endif
                        </div>
                        
                        <div class="info-item mb-3">
                            <label class="font-weight-bold">انستغرام:</label>
                            @if($contact->instagram)
                                <p><a href="{{ $contact->instagram }}" target="_blank">{{ $contact->instagram }}</a></p>
                            @else
                                <p>غير محدد</p>
                            @endif
                        </div>
                        
                        <div class="info-item mb-3">
                            <label class="font-weight-bold">تويتر:</label>
                            @if($contact->twitter)
                                <p><a href="{{ $contact->twitter }}" target="_blank">{{ $contact->twitter }}</a></p>
                            @else
                                <p>غير محدد</p>
                            @endif
                        </div>
                        
                        <div class="info-item mb-3">
                            <label class="font-weight-bold">لينكدإن:</label>
                            @if($contact->linkedin)
                                <p><a href="{{ $contact->linkedin }}" target="_blank">{{ $contact->linkedin }}</a></p>
                            @else
                                <p>غير محدد</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- App Store Links -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="app-links-section">
                        <h4 class="text-right mb-3"><i class="fas fa-mobile-alt ml-2"></i> روابط التطبيقات</h4>
                        
                        <div class="info-item mb-3">
                            <label class="font-weight-bold">متجر جوجل بلاي:</label>
                            @if($contact->googleplaylink)
                                <p><a href="{{ $contact->googleplaylink }}" target="_blank">{{ $contact->googleplaylink }}</a></p>
                            @else
                                <p>غير محدد</p>
                            @endif
                        </div>
                        
                        <div class="info-item mb-3">
                            <label class="font-weight-bold">متجر آبل:</label>
                            @if($contact->appstorelink)
                                <p><a href="{{ $contact->appstorelink }}" target="_blank">{{ $contact->appstorelink }}</a></p>
                            @else
                                <p>غير محدد</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Button -->
            <div class="text-left mt-4">
                <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-primary">
                    <i class="fas fa-edit"></i> تعديل المعلومات
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 10px;
        border: none;
    }
    
    .info-item {
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        border-right: 4px solid #1A998E;
    }
    
    .info-item label {
        color: #1A998E;
        margin-bottom: 5px;
        display: block;
    }
    
    .info-item p {
        margin: 0;
        color: #555;
    }
    
    .info-item a {
        color: #1A998E;
        word-break: break-all;
    }
    
    h4 {
        color: #333;
        padding-bottom: 10px;
        border-bottom: 2px solid #f0f0f0;
    }
    
    @media (max-width: 768px) {
        .col-md-6 {
            margin-bottom: 20px;
        }
    }
</style>
@endsection