<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Our Services - People in Microfinance - Comprehensive loan solutions for small traders and businesses">
    
    <title>Our Services - People in Microfinance</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&family=poppins:400,500,600,700" rel="stylesheet" />
    
    <style>
        :root {
            --primary-blue: #1e3a8a;
            --primary-blue-dark: #1e40af;
            --primary-blue-light: #3b82f6;
            --accent-teal: #0d9488;
            --accent-teal-light: #14b8a6;
            --accent-gold: #d97706;
            --accent-gold-light: #f59e0b;
            --text-dark: #1f2937;
            --text-gray: #6b7280;
            --bg-light: #f8fafc;
            --bg-white: #ffffff;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --radius-card: 16px;
            --radius-pill: 999px;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Navigation */
        nav {
            background: var(--bg-white);
            box-shadow: var(--shadow-sm);
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 1rem 0;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-blue);
            text-decoration: none;
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }
        
        .nav-links a {
            color: var(--text-dark);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--primary-blue);
        }
        
        /* Page Header - Hero */
        .page-header {
            background: linear-gradient(145deg, var(--primary-blue) 0%, #1e3a5f 50%, var(--primary-blue-dark) 100%);
            color: white;
            padding: 5rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .page-header::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.6;
        }
        .page-header .container {
            position: relative;
            z-index: 1;
        }
        .page-header .eyebrow {
            display: inline-block;
            font-size: 0.875rem;
            font-weight: 600;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            opacity: 0.9;
            margin-bottom: 0.75rem;
        }
        .page-header h1 {
            font-size: 3.25rem;
            font-weight: 700;
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
            line-height: 1.2;
        }
        .page-header p {
            font-size: 1.25rem;
            opacity: 0.9;
            max-width: 560px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        /* Content Sections */
        .content-section {
            padding: 4.5rem 0;
        }
        
        .content-section:nth-child(even) {
            background: var(--bg-light);
        }
        
        .section-content {
            max-width: 960px;
            margin: 0 auto;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--accent-teal) 0%, var(--accent-teal-light) 100%);
            border-radius: 2px;
        }
        
        /* Service block - card with accent */
        .service-block {
            background: var(--bg-white);
            border-radius: var(--radius-card);
            padding: 2.5rem 2.25rem;
            box-shadow: 0 4px 24px rgba(30, 58, 138, 0.08);
            border: 1px solid rgba(30, 58, 138, 0.08);
            position: relative;
            overflow: hidden;
        }
        .service-block::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 5px;
            border-radius: var(--radius-card) 0 0 var(--radius-card);
            background: var(--service-accent, var(--accent-teal));
        }
        .service-block.service-accent-1 { --service-accent: #0d9488; }
        .service-block.service-accent-2 { --service-accent: #7c3aed; }
        .service-block.service-accent-3 { --service-accent: #dc2626; }
        .service-block.service-accent-4 { --service-accent: #d97706; }
        
        /* Service Content */
        .service-content {
            margin-top: 0;
        }
        
        .service-title {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 1.25rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .service-icon-wrap {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            flex-shrink: 0;
            background: linear-gradient(135deg, var(--service-accent, var(--accent-teal)) 0%, var(--primary-blue-dark) 100%);
            color: white;
            box-shadow: 0 4px 14px rgba(30, 58, 138, 0.25);
        }
        
        .service-icon {
            font-size: 1.75rem;
        }
        
        .service-description {
            font-size: 1.125rem;
            color: var(--text-gray);
            line-height: 1.8;
            margin-bottom: 2.5rem;
            max-width: 800px;
            padding-left: 0.25rem;
        }
        
        .subsection-label {
            font-size: 0.8125rem;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--service-accent, var(--accent-teal));
            margin-bottom: 0.5rem;
        }
        
        .loan-purpose-section {
            margin-top: 2.5rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(0,0,0,0.06);
        }
        
        .loan-purpose-title {
            font-size: 1.375rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1.25rem;
        }
        
        .purpose-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1rem;
            margin-top: 0;
        }
        
        .purpose-card {
            background: var(--bg-light);
            padding: 1.125rem 1.25rem;
            border-radius: 12px;
            transition: transform 0.2s, box-shadow 0.2s, background 0.2s;
            border: 1px solid transparent;
            display: flex;
            align-items: center;
            gap: 0.875rem;
            border-left: 3px solid var(--service-accent, var(--accent-teal));
        }
        
        .purpose-card:hover {
            transform: translateX(4px);
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            background: var(--bg-white);
        }
        
        .purpose-checkmark {
            color: var(--service-accent, var(--accent-teal));
            font-size: 1.25rem;
            font-weight: bold;
            flex-shrink: 0;
        }
        
        .purpose-text {
            font-size: 1rem;
            color: var(--text-dark);
            line-height: 1.5;
            font-weight: 500;
        }
        
        /* Features Section */
        .features-section {
            margin-top: 2.5rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(0,0,0,0.06);
        }
        
        .features-title {
            font-size: 1.375rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1.25rem;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.25rem;
            margin-top: 0;
        }
        
        .feature-card {
            background: var(--bg-light);
            padding: 1.5rem 1.5rem;
            border-radius: 14px;
            transition: transform 0.25s, box-shadow 0.25s, background 0.25s;
            border: 1px solid rgba(0,0,0,0.04);
            position: relative;
        }
        
        .feature-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(30, 58, 138, 0.12);
            background: var(--bg-white);
        }
        
        .feature-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            background: rgba(13, 148, 136, 0.12);
            color: var(--service-accent, var(--accent-teal));
        }
        .service-block.service-accent-2 .feature-icon { background: rgba(124, 58, 237, 0.12); }
        .service-block.service-accent-3 .feature-icon { background: rgba(220, 38, 38, 0.12); }
        .service-block.service-accent-4 .feature-icon { background: rgba(217, 119, 6, 0.12); }
        
        .feature-name {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 0.375rem;
        }
        
        .feature-description {
            font-size: 0.9375rem;
            color: var(--text-gray);
            line-height: 1.6;
        }
        
        /* Service cards - two-column layout (image design) */
        .svc-card {
            max-width: 1100px;
            margin: 0 auto 3rem;
            border-radius: var(--radius-card);
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            overflow: hidden;
        }
        .svc-card:last-of-type {
            margin-bottom: 0;
        }
        .svc-card--white { background: var(--bg-white); }
        .svc-card--green { background: #ecfdf5; }
        .svc-card__row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2.5rem;
            padding: 2.5rem 2.5rem;
        }
        .svc-header {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        .svc-header__icon {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            flex-shrink: 0;
        }
        .svc-card--blue .svc-header__icon { background: #3b82f6; color: white; }
        .svc-card--green .svc-header__icon { background: #10b981; color: white; }
        .svc-card--purple .svc-header__icon { background: #7c3aed; color: white; }
        .svc-card--orange .svc-header__icon { background: #f59e0b; color: white; }
        .svc-header__text h3 {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.35rem;
        }
        .svc-header__text p {
            font-size: 1rem;
            color: var(--text-gray);
            line-height: 1.6;
        }
        .svc-subsection {
            margin-top: 1.75rem;
        }
        .svc-subsection__title {
            font-size: 1.125rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .svc-subsection__title .ico {
            width: 28px;
            height: 28px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.875rem;
        }
        .svc-card--blue .svc-subsection__title .ico { background: rgba(59, 130, 246, 0.2); color: #1d4ed8; }
        .svc-card--green .svc-subsection__title .ico { background: rgba(16, 185, 129, 0.2); color: #047857; }
        .svc-card--purple .svc-subsection__title .ico { background: rgba(124, 58, 237, 0.2); color: #5b21b6; }
        .svc-card--orange .svc-subsection__title .ico { background: rgba(245, 158, 11, 0.2); color: #b45309; }
        .svc-list {
            list-style: none;
        }
        .svc-list li {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 1rem;
            color: var(--text-dark);
            margin-bottom: 0.6rem;
        }
        .svc-list li::before {
            content: '✔';
            color: #10b981;
            font-weight: bold;
            font-size: 1rem;
        }
        /* Feature boxes (icon + title + short desc) */
        .svc-features {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .svc-feature-box {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            background: #f1f5f9;
            padding: 1rem 1.25rem;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
        }
        .svc-feature-box__icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            flex-shrink: 0;
        }
        .svc-card--blue .svc-feature-box__icon { background: #dbeafe; color: #1d4ed8; }
        .svc-card--green .svc-feature-box__icon { background: #d1fae5; color: #047857; }
        .svc-card--purple .svc-feature-box__icon { background: #ede9fe; color: #5b21b6; }
        .svc-card--orange .svc-feature-box__icon { background: #ffedd5; color: #b45309; }
        .svc-feature-box__title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.2rem;
        }
        .svc-feature-box__desc {
            font-size: 0.875rem;
            color: var(--text-gray);
            line-height: 1.4;
        }
        /* Icon grid (Suitable For / Products Covered) */
        .svc-icon-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            gap: 0.75rem;
        }
        .svc-icon-tile {
            background: var(--bg-white);
            border-radius: 12px;
            padding: 1rem 0.75rem;
            text-align: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.06);
            border: 1px solid #e5e7eb;
        }
        .svc-icon-tile__icon {
            font-size: 1.75rem;
            margin-bottom: 0.5rem;
            display: block;
        }
        .svc-icon-tile__label {
            font-size: 0.8125rem;
            font-weight: 500;
            color: var(--text-dark);
            line-height: 1.3;
        }
        
        /* Footer */
        footer {
            background: var(--text-dark);
            color: white;
            padding: 3rem 0;
            text-align: center;
        }
        
        .footer-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }
        
        .footer-links a {
            color: white;
            text-decoration: none;
            opacity: 0.8;
            transition: opacity 0.3s;
        }
        
        .footer-links a:hover {
            opacity: 1;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .page-header {
                padding: 3.5rem 0;
            }
            .page-header h1 {
                font-size: 2.25rem;
            }
            .page-header .eyebrow {
                font-size: 0.75rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .service-block {
                padding: 1.75rem 1.25rem;
            }
            
            .service-title {
                font-size: 1.5rem;
                flex-wrap: wrap;
                gap: 0.75rem;
            }
            
            .service-icon-wrap {
                width: 48px;
                height: 48px;
                font-size: 1.5rem;
            }
            
            .service-icon {
                font-size: 1.5rem;
            }
            
            .service-description {
                font-size: 1rem;
            }
            
            .loan-purpose-title {
                font-size: 1.25rem;
            }
            
            .purpose-grid {
                grid-template-columns: 1fr;
                gap: 0.75rem;
            }
            
            .purpose-card {
                padding: 1rem 1.25rem;
            }
            
            .purpose-checkmark {
                font-size: 1.125rem;
            }
            
            .purpose-text {
                font-size: 0.9375rem;
            }
            
            .features-title {
                font-size: 1.25rem;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .feature-card {
                padding: 1.25rem;
            }
            
            .feature-icon {
                width: 40px;
                height: 40px;
                font-size: 1.25rem;
            }
            
            .feature-name {
                font-size: 1.0625rem;
            }
            
            .feature-description {
                font-size: 0.875rem;
            }
            .svc-card__row {
                grid-template-columns: 1fr;
                padding: 1.5rem 1.25rem;
                gap: 1.5rem;
            }
            .svc-card {
                margin-bottom: 2rem;
            }
            .svc-header__text h3 {
                font-size: 1.5rem;
            }
            .svc-icon-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="container nav-container">
            <a href="/" class="logo">People in Microfinance</a>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/our-services">Our Services</a></li>
                <li><a href="/become-a-member">Member</a></li>
                <li><a href="/apply-for-loan">Loans</a></li>
                <li><a href="/contact-us">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container scroll-reveal">
            <p class="eyebrow">What we offer</p>
            <h1>Our Services</h1>
            <p>Comprehensive financial solutions tailored to meet your business and personal needs</p>
        </div>
    </section>

    <!-- Services Content -->
    <section class="content-section">
        <div class="container">
            <!-- Small Trader Loans -->
            <div class="svc-card svc-card--white svc-card--blue scroll-reveal">
                <div class="svc-card__row">
                    <div class="svc-card__col">
                        <div class="svc-header">
                            <div class="svc-header__icon">🛒</div>
                            <div class="svc-header__text">
                                <h3>Small Trader Loans</h3>
                                <p>Financial assistance for small business owners and street-level traders to support working capital and daily business operations.</p>
                            </div>
                        </div>
                        <div class="svc-subsection">
                            <h4 class="svc-subsection__title"><span class="ico">🎯</span> Loan Purpose Includes:</h4>
                            <ul class="svc-list">
                                <li>Shop inventory purchase</li>
                                <li>Small business working capital</li>
                                <li>Equipment purchase</li>
                                <li>Business support expenses</li>
                            </ul>
                        </div>
                    </div>
                    <div class="svc-card__col">
                        <div class="svc-subsection">
                            <h4 class="svc-subsection__title"><span class="ico">✨</span> Features:</h4>
                            <div class="svc-features">
                                <div class="svc-feature-box">
                                    <div class="svc-feature-box__icon">📄</div>
                                    <div>
                                        <div class="svc-feature-box__title">Easy documentation</div>
                                        <div class="svc-feature-box__desc">Minimal paperwork required</div>
                                    </div>
                                </div>
                                <div class="svc-feature-box">
                                    <div class="svc-feature-box__icon">⚡</div>
                                    <div>
                                        <div class="svc-feature-box__title">Quick approval</div>
                                        <div class="svc-feature-box__desc">Fast processing time</div>
                                    </div>
                                </div>
                                <div class="svc-feature-box">
                                    <div class="svc-feature-box__icon">🔄</div>
                                    <div>
                                        <div class="svc-feature-box__title">Flexible repayment options</div>
                                        <div class="svc-feature-box__desc">Choose what suits you best</div>
                                    </div>
                                </div>
                                <div class="svc-feature-box">
                                    <div class="svc-feature-box__icon">💰</div>
                                    <div>
                                        <div class="svc-feature-box__title">Small ticket loan structure</div>
                                        <div class="svc-feature-box__desc">Affordable loan amounts</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Daily Collection Loans -->
            <div class="svc-card svc-card--green svc-card--green scroll-reveal">
                <div class="svc-card__row">
                    <div class="svc-card__col">
                        <div class="svc-subsection">
                            <h4 class="svc-subsection__title"><span class="ico">👥</span> Suitable For:</h4>
                            <div class="svc-icon-grid">
                                <div class="svc-icon-tile">
                                    <span class="svc-icon-tile__icon">🥬</span>
                                    <span class="svc-icon-tile__label">Vegetable vendors</span>
                                </div>
                                <div class="svc-icon-tile">
                                    <span class="svc-icon-tile__icon">🛒</span>
                                    <span class="svc-icon-tile__label">Street vendors</span>
                                </div>
                                <div class="svc-icon-tile">
                                    <span class="svc-icon-tile__icon">🏪</span>
                                    <span class="svc-icon-tile__label">Small retail sellers</span>
                                </div>
                                <div class="svc-icon-tile">
                                    <span class="svc-icon-tile__icon">🔧</span>
                                    <span class="svc-icon-tile__label">Service providers</span>
                                </div>
                                <div class="svc-icon-tile">
                                    <span class="svc-icon-tile__icon">👥</span>
                                    <span class="svc-icon-tile__label">Local traders</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="svc-card__col">
                        <div class="svc-header">
                            <div class="svc-header__icon">📅</div>
                            <div class="svc-header__text">
                                <h3>Daily Collection Loans</h3>
                                <p>Loans specially designed for daily income earners and small vendors with convenient daily repayment options.</p>
                            </div>
                        </div>
                        <div class="svc-subsection">
                            <h4 class="svc-subsection__title"><span class="ico">⭐</span> Benefits:</h4>
                            <ul class="svc-list">
                                <li>Easy repayment through daily collection</li>
                                <li>Quick loan processing</li>
                                <li>Short-term financial support</li>
                                <li>Helps maintain daily business cash flow</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Group Personal Loans -->
            <div class="svc-card svc-card--white svc-card--purple scroll-reveal">
                <div class="svc-card__row">
                    <div class="svc-card__col">
                        <div class="svc-header">
                            <div class="svc-header__icon">👥</div>
                            <div class="svc-header__text">
                                <h3>Group Personal Loans</h3>
                                <p>Personal loans provided through group-based lending systems where members support and guarantee each other.</p>
                            </div>
                        </div>
                        <div class="svc-subsection">
                            <h4 class="svc-subsection__title"><span class="ico">📋</span> Loan Usage:</h4>
                            <ul class="svc-list">
                                <li>Education expenses</li>
                                <li>Medical expenses</li>
                                <li>Household needs</li>
                                <li>Family expenses</li>
                                <li>Personal financial support</li>
                            </ul>
                        </div>
                    </div>
                    <div class="svc-card__col">
                        <div class="svc-subsection">
                            <h4 class="svc-subsection__title"><span class="ico">✨</span> Features:</h4>
                            <div class="svc-features">
                                <div class="svc-feature-box">
                                    <div class="svc-feature-box__icon">🤝</div>
                                    <div>
                                        <div class="svc-feature-box__title">Group guarantee model</div>
                                        <div class="svc-feature-box__desc">Collective responsibility</div>
                                    </div>
                                </div>
                                <div class="svc-feature-box">
                                    <div class="svc-feature-box__icon">💵</div>
                                    <div>
                                        <div class="svc-feature-box__title">Affordable interest structure</div>
                                        <div class="svc-feature-box__desc">Competitive rates</div>
                                    </div>
                                </div>
                                <div class="svc-feature-box">
                                    <div class="svc-feature-box__icon">🔓</div>
                                    <div>
                                        <div class="svc-feature-box__title">Easy loan accessibility</div>
                                        <div class="svc-feature-box__desc">Simple application process</div>
                                    </div>
                                </div>
                                <div class="svc-feature-box">
                                    <div class="svc-feature-box__icon">📊</div>
                                    <div>
                                        <div class="svc-feature-box__title">Encourages financial discipline</div>
                                        <div class="svc-feature-box__desc">Build credit together</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Consumer Durable Loans -->
            <div class="svc-card svc-card--white svc-card--orange scroll-reveal">
                <div class="svc-card__row">
                    <div class="svc-card__col">
                        <div class="svc-subsection">
                            <h4 class="svc-subsection__title"><span class="ico">🛍️</span> Products Covered:</h4>
                            <div class="svc-icon-grid">
                                <div class="svc-icon-tile">
                                    <span class="svc-icon-tile__icon">📺</span>
                                    <span class="svc-icon-tile__label">Televisions</span>
                                </div>
                                <div class="svc-icon-tile">
                                    <span class="svc-icon-tile__icon">🧊</span>
                                    <span class="svc-icon-tile__label">Refrigerators</span>
                                </div>
                                <div class="svc-icon-tile">
                                    <span class="svc-icon-tile__icon">🧺</span>
                                    <span class="svc-icon-tile__label">Washing Machines</span>
                                </div>
                                <div class="svc-icon-tile">
                                    <span class="svc-icon-tile__icon">❄️</span>
                                    <span class="svc-icon-tile__label">Air Conditioners</span>
                                </div>
                                <div class="svc-icon-tile">
                                    <span class="svc-icon-tile__icon">📱</span>
                                    <span class="svc-icon-tile__label">Mobile Phones</span>
                                </div>
                                <div class="svc-icon-tile">
                                    <span class="svc-icon-tile__icon">🏠</span>
                                    <span class="svc-icon-tile__label">Home Appliances</span>
                                </div>
                                <div class="svc-icon-tile">
                                    <span class="svc-icon-tile__icon">🏍️</span>
                                    <span class="svc-icon-tile__label">Two Wheelers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="svc-card__col">
                        <div class="svc-header">
                            <div class="svc-header__icon">🛍️</div>
                            <div class="svc-header__text">
                                <h3>Consumer Durable Loans</h3>
                                <p>Loans for purchasing household and electronic products.</p>
                            </div>
                        </div>
                        <div class="svc-subsection">
                            <h4 class="svc-subsection__title"><span class="ico">⭐</span> Benefits:</h4>
                            <div class="svc-features">
                                <div class="svc-feature-box">
                                    <div class="svc-feature-box__icon">✔</div>
                                    <div>
                                        <div class="svc-feature-box__title">Wide range of products</div>
                                        <div class="svc-feature-box__desc">From electronics to vehicles, we've got you covered</div>
                                    </div>
                                </div>
                                <div class="svc-feature-box">
                                    <div class="svc-feature-box__icon">✔</div>
                                    <div>
                                        <div class="svc-feature-box__title">Easy EMI options</div>
                                        <div class="svc-feature-box__desc">Flexible payment plans to suit your budget</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content scroll-reveal-scale">
                <h3 style="margin-bottom: 1rem; font-size: 1.5rem;">People in Microfinance</h3>
                <p style="opacity: 0.8; margin-bottom: 2rem;">
                    Empowering communities through responsible microfinance solutions
                </p>
                <div class="footer-links">
                    <a href="/">Home</a>
                    <a href="/about-us">About Us</a>
                    <a href="/our-services">Our Services</a>
                    <a href="/contact-us">Contact</a>
                    <a href="/privacy-policy">Privacy Policy</a>
                    <a href="/terms-and-conditions">Terms of Service</a>
                </div>
                <div style="margin: 2rem 0; padding: 1.5rem 0; border-top: 1px solid rgba(255, 255, 255, 0.1); border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
                    <h4 style="font-size: 1.125rem; font-weight: 600; margin-bottom: 0.75rem; opacity: 0.9;">Working Hours:</h4>
                    <p style="opacity: 0.8; margin-bottom: 0.5rem; font-size: 1rem;">Monday to Saturday</p>
                    <p style="opacity: 0.8; font-size: 1rem;">10:00 AM to 6:00 PM</p>
                </div>
                <p style="opacity: 0.6; margin-top: 2rem; font-size: 0.875rem;">
                    © {{ date('Y') }} People in Microfinance. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
    @include('partials.scroll-reveal')
</body>
</html>
