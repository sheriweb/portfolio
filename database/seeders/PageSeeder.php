<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::insert([
            [
                'title' => 'About Us',
                'slug' => 'about-us',
                'content' => '<h2>About Our Company</h2><p>We are a team of passionate developers and designers committed to building modern digital solutions that help businesses grow and succeed in the digital landscape.</p><p>With years of experience in web and mobile development, we bring expertise and innovation to every project we undertake.</p><h3>Our Mission</h3><p>To deliver exceptional digital experiences that drive business growth and user satisfaction through innovative technology solutions and creative design.</p><h3>Our Values</h3><ul><li><strong>Excellence</strong> - We strive for excellence in everything we do</li><li><strong>Innovation</strong> - We embrace new technologies and approaches</li><li><strong>Integrity</strong> - We operate with honesty and transparency</li><li><strong>Collaboration</strong> - We believe in the power of teamwork</li></ul>',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'content' => '<h2>Privacy Policy</h2><p>Last updated: September 1, 2025</p><p>This Privacy Policy describes how we collect, use, and disclose your personal information when you visit our website.</p><h3>Information We Collect</h3><p>When you visit our website, we may collect certain information about your device, including information about your web browser, IP address, time zone, and some of the cookies that are installed on your device.</p><h3>How We Use Your Information</h3><p>We use the information we collect to:</p><ul><li>Provide, operate, and maintain our website</li><li>Improve, personalize, and expand our website</li><li>Understand and analyze how you use our website</li><li>Develop new products, services, features, and functionality</li></ul><h3>Contact Us</h3><p>If you have any questions about this Privacy Policy, please contact us at privacy@example.com</p>',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Terms & Conditions',
                'slug' => 'terms-conditions',
                'content' => '<h2>Terms and Conditions</h2><p>Last updated: September 1, 2025</p><p>Please read these terms and conditions carefully before using our website.</p><h3>Intellectual Property Rights</h3><p>Other than the content you own, which you may have opted to include on this Website, under these Terms, our Company and/or its licensors own all the intellectual property rights and materials contained in this Website.</p><h3>Restrictions</h3><p>You are specifically restricted from:</p><ul><li>Publishing any Website material in any other media</li><li>Selling, sublicensing and/or otherwise commercializing any Website material</li><li>Using this Website in any way that is or may be damaging to this Website</li><li>Using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website</li></ul><h3>Contact Us</h3><p>If you have any questions about these Terms, please contact us at terms@example.com</p>',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
