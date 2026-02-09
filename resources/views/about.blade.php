<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="About People in Microfinance - Learn about our mission, vision, and core values">
    
    <title>About Us - People in Microfinance</title>
    
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
            padding: 4rem 0;
        }
        
        .content-section:nth-child(even) {
            background: var(--bg-light);
        }
        
        .overview-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2.5rem;
            align-items: center;
        }
        .overview-grid .section-content {
            max-width: none;
        }
        .overview-img-wrap {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }
        .overview-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .section-content {
            max-width: 900px;
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
        
        .section-text {
            font-size: 1.125rem;
            color: var(--text-gray);
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }
        
        .section-text strong {
            color: var(--primary-blue);
            font-weight: 600;
        }
        
        /* Mission & Vision Section - dark background (override even-section rule) */
        .content-section.mission-vision-section {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%) !important;
        }
        
        /* Mission & Vision Cards */
        .mission-vision-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .mv-card {
            background: white;
            padding: 2.5rem;
            border-radius: 1rem;
            box-shadow: var(--shadow-md);
            transition: all 0.3s ease;
            border-top: 4px solid var(--accent-teal);
        }
        
        .mv-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }
        
        .mv-card h3 {
            font-size: 1.75rem;
            color: var(--primary-blue);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .mv-card .icon {
            font-size: 2rem;
        }
        
        .mv-card p {
            font-size: 1.125rem;
            color: var(--text-gray);
            line-height: 1.8;
        }
        
        /* Core Values - horizontal scrollable carousel (landscape cards) */
        .values-carousel-wrap {
            margin-top: 2rem;
            overflow: hidden;
            padding-bottom: 0.5rem;
        }
        
        .values-grid {
            display: flex;
            gap: 1.25rem;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            padding: 0.5rem 1.5rem 1rem 1.5rem;
            scroll-padding-left: 1.5rem;
            scroll-padding-right: 1.5rem;
            -webkit-overflow-scrolling: touch;
        }
        
        .value-card:first-child {
            margin-left: 1.25rem;
        }
        
        .values-grid::-webkit-scrollbar {
            height: 8px;
        }
        
        .values-grid::-webkit-scrollbar-track {
            background: #e5e7eb;
            border-radius: 4px;
        }
        
        .values-grid::-webkit-scrollbar-thumb {
            background: var(--accent-teal);
            border-radius: 4px;
        }
        
        .value-card {
            flex: 0 0 auto;
            min-width: 340px;
            max-width: 380px;
            background: #e0f2fe;
            padding: 1.5rem 1.75rem;
            border-radius: 1rem;
            box-shadow: var(--shadow-md),
                -5px 0 0 0 #0d9488,
                -10px 0 0 0 #3b82f6,
                -15px 0 0 0 #dc2626;
            transition: all 0.3s ease;
            scroll-snap-align: start;
            display: flex;
            align-items: center;
            gap: 1.25rem;
            text-align: left;
            position: relative;
        }
        
        .value-card:nth-child(1) {
            box-shadow: var(--shadow-md),
                -5px 0 0 0 #0d9488,
                -10px 0 0 0 #3b82f6,
                -15px 0 0 0 #dc2626;
        }
        
        .value-card:nth-child(2) {
            box-shadow: var(--shadow-md),
                -5px 0 0 0 #f59e0b,
                -10px 0 0 0 #0d9488,
                -15px 0 0 0 #6366f1;
        }
        
        .value-card:nth-child(3) {
            box-shadow: var(--shadow-md),
                -5px 0 0 0 #8b5cf6,
                -10px 0 0 0 #06b6d4,
                -15px 0 0 0 #ec4899;
        }
        
        .value-card:nth-child(4) {
            box-shadow: var(--shadow-md),
                -5px 0 0 0 #10b981,
                -10px 0 0 0 #2563eb,
                -15px 0 0 0 #f97316;
        }
        
        .value-card:nth-child(5) {
            box-shadow: var(--shadow-md),
                -5px 0 0 0 #14b8a6,
                -10px 0 0 0 #a855f7,
                -15px 0 0 0 #eab308;
        }
        
        .value-card:hover {
            box-shadow: var(--shadow-lg),
                -5px 0 0 0 #0d9488,
                -10px 0 0 0 #3b82f6,
                -15px 0 0 0 #dc2626;
        }
        
        .value-card:nth-child(2):hover {
            box-shadow: var(--shadow-lg),
                -5px 0 0 0 #f59e0b,
                -10px 0 0 0 #0d9488,
                -15px 0 0 0 #6366f1;
        }
        
        .value-card:nth-child(3):hover {
            box-shadow: var(--shadow-lg),
                -5px 0 0 0 #8b5cf6,
                -10px 0 0 0 #06b6d4,
                -15px 0 0 0 #ec4899;
        }
        
        .value-card:nth-child(4):hover {
            box-shadow: var(--shadow-lg),
                -5px 0 0 0 #10b981,
                -10px 0 0 0 #2563eb,
                -15px 0 0 0 #f97316;
        }
        
        .value-card:nth-child(5):hover {
            box-shadow: var(--shadow-lg),
                -5px 0 0 0 #14b8a6,
                -10px 0 0 0 #a855f7,
                -15px 0 0 0 #eab308;
        }
        
        .value-icon {
            font-size: 2.25rem;
            flex-shrink: 0;
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(13, 148, 136, 0.1);
            border-radius: 0.5rem;
        }
        
        .value-card-content {
            min-width: 0;
        }
        
        .value-card h4 {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 0.4rem;
        }
        
        .value-card p {
            font-size: 0.9375rem;
            color: var(--text-gray);
            line-height: 1.55;
            margin: 0;
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
            
            .mission-vision-grid {
                grid-template-columns: 1fr;
            }
            
            .overview-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            .overview-grid .overview-img-wrap {
                order: -1;
            }
            
            .value-card {
                min-width: 300px;
                max-width: 100%;
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
            <p class="eyebrow">Who we are</p>
            <h1>About Us</h1>
            <p>Learn more about our mission, vision, and commitment to financial inclusion</p>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="content-section">
        <div class="container">
            <div class="overview-grid scroll-reveal">
                <div class="section-content">
                    <h2 class="section-title">Company Overview</h2>
                    <p class="section-text">
                        <strong>People in Microfinance</strong> is a socially responsible microfinance organization committed to providing financial assistance to small traders, daily earners, and member groups. We focus on providing accessible lending services while promoting financial discipline and responsible borrowing.
                    </p>
                    <p class="section-text">
                        Our organization understands the unique challenges faced by small business owners and individuals in underserved communities. Through our comprehensive microfinance solutions, we aim to bridge the financial gap and empower our members to achieve their economic goals.
                    </p>
                </div>
                <div class="overview-img-wrap">
                    <img src="{{ asset('images/aboutcompany.png') }}" alt="People in Microfinance - Company" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="content-section mission-vision-section">
        <div class="container">
            <div class="mission-vision-grid scroll-reveal-grid">
                <div class="mv-card">
                    <h3>
                        <span class="icon">🎯</span>
                        Our Mission
                    </h3>
                    <p>
                        To support small business owners and families by providing affordable microfinance services that promote financial stability and community development.
                    </p>
                </div>
                <div class="mv-card">
                    <h3>
                        <span class="icon">👁️</span>
                        Our Vision
                    </h3>
                    <p>
                        To become a reliable microfinance institution empowering small traders and low-income communities through transparent financial support.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="content-section">
        <div class="container">
            <div class="section-content scroll-reveal">
                <h2 class="section-title">Core Values</h2>
                <div class="values-carousel-wrap">
                    <div class="values-grid scroll-reveal-grid">
                        <div class="value-card">
                            <div class="value-icon">⚖️</div>
                            <div class="value-card-content">
                                <h4>Integrity</h4>
                                <p>We conduct our business with honesty, ethics, and moral principles in all our interactions.</p>
                            </div>
                        </div>
                        <div class="value-card">
                            <div class="value-icon">🔍</div>
                            <div class="value-card-content">
                                <h4>Transparency</h4>
                                <p>We maintain open and clear communication about our processes, terms, and conditions.</p>
                            </div>
                        </div>
                        <div class="value-card">
                            <div class="value-icon">🤝</div>
                            <div class="value-card-content">
                                <h4>Customer Commitment</h4>
                                <p>We are dedicated to serving our members with excellence and understanding their needs.</p>
                            </div>
                        </div>
                        <div class="value-card">
                            <div class="value-icon">🌍</div>
                            <div class="value-card-content">
                                <h4>Financial Inclusion</h4>
                                <p>We believe in providing equal access to financial services for all members of society.</p>
                            </div>
                        </div>
                        <div class="value-card">
                            <div class="value-icon">❤️</div>
                            <div class="value-card-content">
                                <h4>Social Responsibility</h4>
                                <p>We are committed to making a positive impact on the communities we serve.</p>
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
                    <a href="/#services">Services</a>
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
