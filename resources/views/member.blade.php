<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Become a Member - People in Microfinance - Join our microfinance institution to access loan services">
    
    <title>Become a Member - People in Microfinance</title>
    
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
        
        .section-content {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .intro-text {
            font-size: 1.25rem;
            color: var(--text-gray);
            line-height: 1.9;
            margin-bottom: 3rem;
            text-align: center;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 2.5rem;
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
        
        /* Benefits Grid */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .benefit-card {
            background: var(--bg-white);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid #e5e7eb;
        }
        
        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }
        
        .benefit-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            display: block;
        }
        
        .benefit-name {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 0.5rem;
        }
        
        /* Eligibility Grid */
        .eligibility-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .eligibility-card {
            background: var(--bg-white);
            padding: 1.75rem;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .eligibility-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }
        
        .eligibility-checkmark {
            color: var(--accent-teal);
            font-size: 2rem;
            font-weight: bold;
            flex-shrink: 0;
        }
        
        .eligibility-text {
            font-size: 1.125rem;
            color: var(--text-dark);
            line-height: 1.6;
            font-weight: 500;
        }
        
        /* Process Steps */
        .process-steps {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-top: 2rem;
            position: relative;
        }
        
        .process-step {
            background: var(--bg-white);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid #e5e7eb;
            position: relative;
            display: flex;
            gap: 1.5rem;
            align-items: flex-start;
        }
        
        .process-step:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }
        
        .step-number {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-blue-dark) 100%);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            flex-shrink: 0;
            box-shadow: var(--shadow-md);
        }
        
        .step-content {
            flex: 1;
        }
        
        .step-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 0.75rem;
        }
        
        .step-description {
            font-size: 1.125rem;
            color: var(--text-gray);
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
                font-size: 1.75rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .intro-text {
                font-size: 1.125rem;
            }
            
            .benefits-grid,
            .eligibility-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .benefit-card,
            .eligibility-card {
                padding: 1.5rem;
            }
            
            .benefit-name,
            .eligibility-text {
                font-size: 1rem;
            }
            
            .process-steps {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .process-step {
                padding: 1.5rem;
                gap: 1rem;
            }
            
            .step-number {
                width: 50px;
                height: 50px;
                font-size: 1.25rem;
            }
            
            .step-title {
                font-size: 1.25rem;
            }
            
            .step-description {
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
                <li><a href="/become-a-member">Member</a></li>
                <li><a href="/apply-for-loan">Loans</a></li>
                <li><a href="/contact-us">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container scroll-reveal">
            <p class="eyebrow">Join us</p>
            <h1>Become a Member</h1>
            <p>Join our microfinance institution to access comprehensive loan services</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content-section">
        <div class="container">
            <div class="section-content scroll-reveal">
                <p class="intro-text">
                    All loan services are available only to registered members of our institution.
                </p>
                
                <h2 class="section-title">Membership Benefits</h2>
                <div class="benefits-grid scroll-reveal-grid">
                    <div class="benefit-card">
                        <span class="benefit-icon">💼</span>
                        <h3 class="benefit-name">Access to Multiple Loan Schemes</h3>
                    </div>
                    <div class="benefit-card">
                        <span class="benefit-icon">💰</span>
                        <h3 class="benefit-name">Lower Interest Loan Opportunities</h3>
                    </div>
                    <div class="benefit-card">
                        <span class="benefit-icon">⚡</span>
                        <h3 class="benefit-name">Priority Loan Processing</h3>
                    </div>
                    <div class="benefit-card">
                        <span class="benefit-icon">📚</span>
                        <h3 class="benefit-name">Financial Guidance Support</h3>
                    </div>
                    <div class="benefit-card">
                        <span class="benefit-icon">🎓</span>
                        <h3 class="benefit-name">Participation in Financial Awareness Programs</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Eligibility Criteria Section -->
    <section class="content-section">
        <div class="container">
            <div class="section-content scroll-reveal">
                <h2 class="section-title">ELIGIBILITY CRITERIA</h2>
                <p style="text-align: center; font-size: 1.125rem; color: var(--text-gray); margin-bottom: 2rem;">
                    Applicants must meet the following requirements:
                </p>
                <div class="eligibility-grid scroll-reveal-grid">
                    <div class="eligibility-card">
                        <span class="eligibility-checkmark">✔</span>
                        <span class="eligibility-text">Minimum age – 18 years</span>
                    </div>
                    <div class="eligibility-card">
                        <span class="eligibility-checkmark">✔</span>
                        <span class="eligibility-text">Must be small trader / daily earner / group member</span>
                    </div>
                    <div class="eligibility-card">
                        <span class="eligibility-checkmark">✔</span>
                        <span class="eligibility-text">Valid identity proof</span>
                    </div>
                    <div class="eligibility-card">
                        <span class="eligibility-checkmark">✔</span>
                        <span class="eligibility-text">Valid address proof</span>
                    </div>
                    <div class="eligibility-card">
                        <span class="eligibility-checkmark">✔</span>
                        <span class="eligibility-text">Regular income source</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Documents Required Section -->
    <section class="content-section">
        <div class="container">
            <div class="section-content scroll-reveal">
                <h2 class="section-title">DOCUMENTS REQUIRED</h2>
                <div class="eligibility-grid scroll-reveal-grid">
                    <div class="eligibility-card">
                        <span class="eligibility-checkmark">✔</span>
                        <span class="eligibility-text">Aadhaar Card</span>
                    </div>
                    <div class="eligibility-card">
                        <span class="eligibility-checkmark">✔</span>
                        <span class="eligibility-text">PAN Card</span>
                    </div>
                    <div class="eligibility-card">
                        <span class="eligibility-checkmark">✔</span>
                        <span class="eligibility-text">Passport Size Photographs</span>
                    </div>
                    <div class="eligibility-card">
                        <span class="eligibility-checkmark">✔</span>
                        <span class="eligibility-text">Business Proof (if applicable)</span>
                    </div>
                    <div class="eligibility-card">
                        <span class="eligibility-checkmark">✔</span>
                        <span class="eligibility-text">Bank Statement / Bank Account Details</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Loan Application Process Section -->
    <section class="content-section">
        <div class="container">
            <div class="section-content scroll-reveal">
                <h2 class="section-title">LOAN APPLICATION PROCESS</h2>
                <div class="process-steps scroll-reveal-grid">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3 class="step-title">Step 1 – Membership Registration</h3>
                            <p class="step-description">Applicant must register as member or join approved lending group.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3 class="step-title">Step 2 – Loan Application Submission</h3>
                            <p class="step-description">Submit loan application through field executive or official channel.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3 class="step-title">Step 3 – Verification</h3>
                            <p class="step-description">Documents and applicant eligibility verification.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3 class="step-title">Step 4 – Loan Approval & Disbursement</h3>
                            <p class="step-description">Loan amount will be credited as per institutional policy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Group Lending Model Section -->
    <section class="content-section">
        <div class="container">
            <div class="section-content scroll-reveal">
                <h2 class="section-title">GROUP LENDING MODEL</h2>
                
                <div class="terms-card" style="margin-top: 2rem;">
                    <h3 class="terms-title">How Group Lending Works</h3>
                    <p class="terms-text">
                        Our group lending model encourages members to form trusted groups where each member supports loan repayment responsibility. This system strengthens financial discipline and ensures easy loan access.
                    </p>
                    <p class="terms-text">
                        Through this collaborative approach, group members provide mutual support and guarantee each other's loans, creating a strong foundation of trust and accountability. This model not only facilitates easier access to credit but also promotes financial literacy and responsible borrowing practices among all group members.
                    </p>
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
