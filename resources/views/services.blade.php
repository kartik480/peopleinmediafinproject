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
        
        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-blue-dark) 100%);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }
        
        .page-header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .page-header p {
            font-size: 1.25rem;
            opacity: 0.9;
        }
        
        /* Content Sections */
        .content-section {
            padding: 4rem 0;
        }
        
        .content-section:nth-child(even) {
            background: var(--bg-light);
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
        
        /* Service Content */
        .service-content {
            margin-top: 3rem;
        }
        
        .service-title {
            font-size: 2.25rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .service-icon {
            font-size: 2.5rem;
        }
        
        .service-description {
            font-size: 1.25rem;
            color: var(--text-gray);
            line-height: 1.9;
            margin-bottom: 3rem;
            max-width: 800px;
        }
        
        .loan-purpose-section {
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 2px solid var(--bg-light);
        }
        
        .loan-purpose-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 2rem;
        }
        
        .purpose-list {
            list-style: none;
            padding: 0;
            max-width: 800px;
        }
        
        .purpose-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            padding: 1rem 0;
            margin-bottom: 0.5rem;
            border-bottom: 1px solid var(--bg-light);
        }
        
        .purpose-item:last-child {
            border-bottom: none;
        }
        
        .purpose-checkmark {
            color: var(--accent-teal);
            font-size: 1.5rem;
            font-weight: bold;
            flex-shrink: 0;
            margin-top: 0.125rem;
        }
        
        .purpose-text {
            font-size: 1.125rem;
            color: var(--text-dark);
            line-height: 1.7;
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
            .page-header h1 {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .service-title {
                font-size: 1.75rem;
                flex-direction: column;
                text-align: center;
                gap: 0.5rem;
            }
            
            .service-icon {
                font-size: 2rem;
            }
            
            .service-description {
                font-size: 1.125rem;
            }
            
            .loan-purpose-title {
                font-size: 1.5rem;
            }
            
            .purpose-text {
                font-size: 1rem;
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
                <li><a href="/#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Our Services</h1>
            <p>Comprehensive financial solutions tailored to meet your business and personal needs</p>
        </div>
    </section>

    <!-- Services Content -->
    <section class="content-section">
        <div class="container">
            <div class="section-content">
                <h2 class="section-title">OUR SERVICES</h2>
                
                <div class="service-content">
                    <h3 class="service-title">
                        <span class="service-icon">🏪</span>
                        Small Trader Loans
                    </h3>
                    
                    <p class="service-description">
                        Financial assistance for small business owners and street-level traders to support working capital and daily business operations.
                    </p>
                    
                    <div class="loan-purpose-section">
                        <h4 class="loan-purpose-title">Loan Purpose Includes:</h4>
                        <ul class="purpose-list">
                            <li class="purpose-item">
                                <span class="purpose-checkmark">✔</span>
                                <span class="purpose-text">Shop inventory purchase</span>
                            </li>
                            <li class="purpose-item">
                                <span class="purpose-checkmark">✔</span>
                                <span class="purpose-text">Small business working capital</span>
                            </li>
                            <li class="purpose-item">
                                <span class="purpose-checkmark">✔</span>
                                <span class="purpose-text">Equipment purchase</span>
                            </li>
                            <li class="purpose-item">
                                <span class="purpose-checkmark">✔</span>
                                <span class="purpose-text">Business support expenses</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <h3 style="margin-bottom: 1rem; font-size: 1.5rem;">People in Microfinance</h3>
                <p style="opacity: 0.8; margin-bottom: 2rem;">
                    Empowering communities through responsible microfinance solutions
                </p>
                <div class="footer-links">
                    <a href="/">Home</a>
                    <a href="/about-us">About Us</a>
                    <a href="/our-services">Our Services</a>
                    <a href="/#contact">Contact</a>
                    <a href="#privacy">Privacy Policy</a>
                    <a href="#terms">Terms of Service</a>
                </div>
                <p style="opacity: 0.6; margin-top: 2rem; font-size: 0.875rem;">
                    © {{ date('Y') }} People in Microfinance. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
