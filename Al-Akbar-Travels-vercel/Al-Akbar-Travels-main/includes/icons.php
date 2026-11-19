<?php
/**
 * Al Akbar Travels — Executive Luxury SVG Icon Library
 * Replaces cartoonish unicode emojis with precision-crafted, realistic luxury vector emblems.
 */

if (!function_exists('luxIcon')) {
    function luxIcon($name, $class = 'lux-icon', $size = 24) {
        $defs = '<defs>
            <linearGradient id="luxGold" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#FFE7AB"/>
                <stop offset="50%" stop-color="#D5AE68"/>
                <stop offset="100%" stop-color="#9E7836"/>
            </linearGradient>
            <linearGradient id="luxOcean" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#126B91"/>
                <stop offset="100%" stop-color="#35BFC7"/>
            </linearGradient>
            <linearGradient id="luxAqua" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#35BFC7"/>
                <stop offset="100%" stop-color="#126B91"/>
            </linearGradient>
            <linearGradient id="luxNavy" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#17364B"/>
                <stop offset="100%" stop-color="#126B91"/>
            </linearGradient>
            <linearGradient id="luxGreen" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#25D366"/>
                <stop offset="100%" stop-color="#128C7E"/>
            </linearGradient>
        </defs>';

        $icons = [
            // BENTO GRID REALISTIC LUXURY EMBLEMS (36x36 / 48x48)
            'bento-accreditation' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <circle cx="24" cy="24" r="21" stroke="url(#luxGold)" stroke-width="2" stroke-dasharray="3 2"/>
                <circle cx="24" cy="24" r="18" fill="url(#luxNavy)" stroke="url(#luxGold)" stroke-width="1.5"/>
                <path d="M16 19L24 13L32 19H16Z" fill="url(#luxGold)"/>
                <rect x="18" y="21" width="2" height="11" rx="1" fill="#FFFFFF"/>
                <rect x="23" y="21" width="2" height="11" rx="1" fill="#FFFFFF"/>
                <rect x="28" y="21" width="2" height="11" rx="1" fill="#FFFFFF"/>
                <rect x="15" y="32" width="18" height="2.5" rx="1" fill="url(#luxGold)"/>
                <path d="M24 6L25.5 9.5L29 10L26.5 12.5L27 16L24 14.5L21 16L21.5 12.5L19 10L22.5 9.5L24 6Z" fill="url(#luxGold)"/>
            </svg>',

            'bento-concierge' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M24 4L38 9V22C38 31.5 32 39.5 24 44C16 39.5 10 31.5 10 22V9L24 4Z" fill="url(#luxOcean)" stroke="url(#luxAqua)" stroke-width="1.5"/>
                <path d="M17 23C17 19.134 20.134 16 24 16C27.866 16 31 19.134 31 23V26C31 27.1046 30.1046 28 29 28H28V22H30V23C30 19.6863 27.3137 17 24 17C20.6863 17 18 19.6863 18 23V28H19C17.8954 28 17 27.1046 17 26V23Z" fill="#FFFFFF"/>
                <rect x="16" y="22" width="3" height="6" rx="1.5" fill="url(#luxGold)"/>
                <rect x="29" y="22" width="3" height="6" rx="1.5" fill="url(#luxGold)"/>
                <path d="M29 28V31C29 32.1 28.1 33 27 33H24" stroke="url(#luxGold)" stroke-width="1.5" stroke-linecap="round"/>
                <circle cx="23" cy="33" r="1.5" fill="#35BFC7"/>
                <circle cx="36" cy="12" r="4" fill="#25D366"/>
                <circle cx="36" cy="12" r="6" stroke="#25D366" stroke-width="1" stroke-opacity="0.5"/>
            </svg>',

            'bento-hotel' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <rect x="11" y="14" width="26" height="28" rx="3" fill="url(#luxNavy)" stroke="url(#luxGold)" stroke-width="1.5"/>
                <path d="M24 4L27 14H21L24 4Z" fill="url(#luxGold)"/>
                <path d="M24 2C24.8 2 25.5 2.5 25.5 3.2C25.5 4 24.6 4.6 23.8 4.4C24.4 5 25.3 5 26 4.7C25.7 5.7 24.7 6.4 23.5 6.4C22.1 6.4 21 5.3 21 3.9C21 2.8 21.8 1.9 22.8 1.8C23.2 1.9 23.6 1.9 24 2Z" fill="url(#luxGold)"/>
                <rect x="15" y="18" width="4" height="4" rx="1" fill="#FFFFFF" fill-opacity="0.9"/>
                <rect x="22" y="18" width="4" height="4" rx="1" fill="url(#luxGold)"/>
                <rect x="29" y="18" width="4" height="4" rx="1" fill="#FFFFFF" fill-opacity="0.9"/>
                <rect x="15" y="25" width="4" height="4" rx="1" fill="url(#luxGold)"/>
                <rect x="22" y="25" width="4" height="4" rx="1" fill="#FFFFFF" fill-opacity="0.9"/>
                <rect x="29" y="25" width="4" height="4" rx="1" fill="url(#luxGold)"/>
                <path d="M20 42V34C20 31.7909 21.7909 30 24 30C26.2091 30 28 31.7909 28 34V42H20Z" fill="url(#luxGold)"/>
            </svg>',

            'bento-logistics' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <circle cx="24" cy="24" r="21" fill="url(#luxNavy)" stroke="url(#luxAqua)" stroke-width="1.5"/>
                <path d="M10 28L13 20C13.5 18.5 15 17.5 17 17.5H29C31 17.5 32.5 18.5 33.5 20.5L37.5 25.5C38.5 26.5 39 27.5 39 29V32C39 32.6 38.6 33 38 33H36.5C36.2 31.3 34.7 30 33 30C31.3 30 29.8 31.3 29.5 33H18.5C18.2 31.3 16.7 30 15 30C13.3 30 11.8 31.3 11.5 33H10C9.4 33 9 32.6 9 32V29C9 28.5 9.4 28 10 28Z" fill="url(#luxOcean)"/>
                <path d="M17 19.5H23V25H14.5L17 19.5Z" fill="#FFFFFF" fill-opacity="0.85"/>
                <path d="M25 19.5H30L33.5 25H25V19.5Z" fill="#FFFFFF" fill-opacity="0.85"/>
                <circle cx="15" cy="33" r="3.5" fill="#17364B" stroke="url(#luxGold)" stroke-width="1.5"/>
                <circle cx="33" cy="33" r="3.5" fill="#17364B" stroke="url(#luxGold)" stroke-width="1.5"/>
                <path d="M8 37H40" stroke="url(#luxGold)" stroke-width="2" stroke-linecap="round"/>
            </svg>',

            // UNIVERSAL TRUST BAR & HEADER ICONS
            'flight' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M21 16V14L13 9V3.5C13 2.67 12.33 2 11.5 2C10.67 2 10 2.67 10 3.5V9L2 14V16L10 13.5V19L8 20.5V22L11.5 21L15 22V20.5L13 19V13.5L21 16Z" fill="url(#luxOcean)"/>
            </svg>',

            'iata' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M12 2L3 6V8H21V6L12 2Z" fill="url(#luxGold)"/>
                <rect x="5" y="9" width="2" height="9" rx="0.5" fill="url(#luxOcean)"/>
                <rect x="9.3" y="9" width="2" height="9" rx="0.5" fill="url(#luxOcean)"/>
                <rect x="13.7" y="9" width="2" height="9" rx="0.5" fill="url(#luxOcean)"/>
                <rect x="18" y="9" width="2" height="9" rx="0.5" fill="url(#luxOcean)"/>
                <path d="M2 19V22H22V19H2Z" fill="url(#luxGold)"/>
            </svg>',

            'kaaba' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M12 2L3 6.5V17.5L12 22L21 17.5V6.5L12 2Z" fill="url(#luxNavy)" stroke="url(#luxGold)" stroke-width="1"/>
                <path d="M12 2V22" stroke="url(#luxGold)" stroke-width="1"/>
                <path d="M3 6.5L12 11L21 6.5" stroke="url(#luxGold)" stroke-width="1"/>
                <path d="M3 9.5L12 14L21 9.5" stroke="url(#luxGold)" stroke-width="2"/>
                <rect x="14" y="13" width="3" height="4.5" rx="0.5" fill="url(#luxGold)"/>
            </svg>',

            'phone' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M20.01 15.38C18.78 15.38 17.59 15.18 16.48 14.82C16.13 14.7 15.74 14.79 15.47 15.06L13.9 17.03C11.07 15.68 8.42 13.13 7.01 10.2L8.96 8.54C9.23 8.26 9.31 7.87 9.2 7.52C8.83 6.41 8.64 5.22 8.64 3.99C8.64 3.45 8.19 3 7.65 3H4.19C3.65 3 3 3.24 3 3.99C3 13.28 10.73 21 20.01 21C20.72 21 21 20.37 21 19.82V16.37C21 15.83 20.55 15.38 20.01 15.38Z" fill="url(#luxOcean)"/>
            </svg>',

            'whatsapp' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.63C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2Z" fill="url(#luxGreen)"/>
                <path d="M17.51 14.38C17.21 14.23 15.74 13.51 15.47 13.41C15.2 13.31 15 13.26 14.8 13.56C14.6 13.86 14.03 14.53 13.85 14.73C13.68 14.93 13.5 14.95 13.2 14.8C12.9 14.65 11.94 14.34 10.8 13.32C9.91 12.53 9.31 11.55 9.14 11.25C8.96 10.95 9.12 10.79 9.27 10.64C9.41 10.5 9.57 10.28 9.72 10.11C9.87 9.94 9.92 9.81 10.02 9.61C10.12 9.41 10.07 9.24 10 9.09C9.92 8.94 9.32 7.47 9.07 6.87C8.83 6.29 8.58 6.37 8.4 6.36C8.23 6.35 8.03 6.35 7.83 6.35C7.63 6.35 7.31 6.42 7.03 6.72C6.76 7.02 5.99 7.74 5.99 9.22C5.99 10.7 7.06 12.12 7.21 12.32C7.36 12.52 9.33 15.55 12.34 16.85C13.06 17.16 13.62 17.35 14.06 17.49C14.78 17.72 15.43 17.69 15.95 17.61C16.53 17.52 17.73 16.88 17.98 16.18C18.23 15.48 18.23 14.88 18.15 14.76C18.08 14.63 17.81 14.53 17.51 14.38Z" fill="#FFFFFF"/>
            </svg>',

            'luggage' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <rect x="5" y="7" width="14" height="14" rx="2.5" fill="url(#luxNavy)" stroke="url(#luxOcean)" stroke-width="1.5"/>
                <path d="M9 7V4.5C9 3.67 9.67 3 10.5 3H13.5C14.33 3 15 3.67 15 4.5V7" stroke="url(#luxGold)" stroke-width="1.5"/>
                <line x1="9" y1="10" x2="9" y2="18" stroke="url(#luxAqua)" stroke-width="1.5" stroke-linecap="round"/>
                <line x1="15" y1="10" x2="15" y2="18" stroke="url(#luxAqua)" stroke-width="1.5" stroke-linecap="round"/>
                <circle cx="7.5" cy="21.5" r="1" fill="url(#luxGold)"/>
                <circle cx="16.5" cy="21.5" r="1" fill="url(#luxGold)"/>
            </svg>',

            'speed' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M13 2L4 13.5H11L10 22L20 10.5H13L14 2H13Z" fill="url(#luxAqua)" stroke="url(#luxOcean)" stroke-width="1"/>
            </svg>',

            'shield' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M12 2L20 5.5V11C20 16.5 16.5 20.8 12 22C7.5 20.8 4 16.5 4 11V5.5L12 2Z" fill="url(#luxOcean)" stroke="url(#luxAqua)" stroke-width="1.5"/>
                <path d="M9 11.5L11 13.5L15 9.5" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>',

            'hotel' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <rect x="4" y="3" width="16" height="18" rx="2" fill="url(#luxNavy)" stroke="url(#luxGold)" stroke-width="1.5"/>
                <rect x="7" y="6" width="2.5" height="2.5" rx="0.5" fill="#FFFFFF"/>
                <rect x="11" y="6" width="2.5" height="2.5" rx="0.5" fill="url(#luxGold)"/>
                <rect x="14.5" y="6" width="2.5" height="2.5" rx="0.5" fill="#FFFFFF"/>
                <rect x="7" y="11" width="2.5" height="2.5" rx="0.5" fill="url(#luxGold)"/>
                <rect x="11" y="11" width="2.5" height="2.5" rx="0.5" fill="#FFFFFF"/>
                <rect x="14.5" y="11" width="2.5" height="2.5" rx="0.5" fill="url(#luxGold)"/>
                <path d="M10 21V16.5C10 15.7 10.7 15 11.5 15H12.5C13.3 15 14 15.7 14 16.5V21H10Z" fill="url(#luxGold)"/>
            </svg>',

            'water' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M12 2.69L17.18 8.84C18.95 10.95 19.5 13.6 18.66 16.14C17.82 18.68 15.71 20.61 13.12 21.2C10.53 21.79 7.82 20.96 6 19.04C4.18 17.12 3.5 14.39 4.22 11.89C4.94 9.39 6.94 7.42 9.5 6.69L12 2.69Z" fill="url(#luxAqua)" stroke="url(#luxOcean)" stroke-width="1.5"/>
                <path d="M9 13C9 14.66 10.34 16 12 16" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"/>
            </svg>',

            'star' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" fill="url(#luxGold)"/>
            </svg>',

            'voucher' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <rect x="3" y="5" width="18" height="14" rx="2" fill="url(#luxNavy)" stroke="url(#luxGold)" stroke-width="1.5"/>
                <line x1="7" y1="9" x2="13" y2="9" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"/>
                <line x1="7" y1="13" x2="17" y2="13" stroke="url(#luxAqua)" stroke-width="1.5" stroke-linecap="round"/>
                <circle cx="16" cy="8.5" r="1.5" fill="url(#luxGold)"/>
            </svg>',

            'visa' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <rect x="4" y="3" width="16" height="18" rx="2" fill="url(#luxNavy)" stroke="url(#luxAqua)" stroke-width="1.5"/>
                <circle cx="12" cy="9.5" r="3" fill="none" stroke="url(#luxGold)" stroke-width="1.5"/>
                <path d="M8 17C8 14.8 9.8 13 12 13C14.2 13 16 14.8 16 17H8Z" fill="url(#luxGold)"/>
                <circle cx="16.5" cy="6" r="1" fill="#35BFC7"/>
            </svg>',

            'tour' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M14 6L8 16H11L14 11L17 16H20L14 6Z" fill="url(#luxAqua)"/>
                <path d="M7 10L2 18H16L12 12L9.5 15.5L7 10Z" fill="url(#luxOcean)"/>
                <circle cx="18" cy="5" r="2" fill="url(#luxGold)"/>
            </svg>',

            'pin' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2Z" fill="url(#luxOcean)"/>
                <circle cx="12" cy="9" r="2.5" fill="#FFFFFF"/>
            </svg>',

            'globe' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <circle cx="12" cy="12" r="9" stroke="url(#luxOcean)" stroke-width="1.5"/>
                <path d="M3.6 9H20.4M3.6 15H20.4" stroke="url(#luxOcean)" stroke-width="1.2"/>
                <ellipse cx="12" cy="12" rx="4.5" ry="9" stroke="url(#luxAqua)" stroke-width="1.2"/>
            </svg>',

            'clock' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <circle cx="12" cy="12" r="9" stroke="url(#luxOcean)" stroke-width="1.5"/>
                <path d="M12 7V12L15.5 14" stroke="url(#luxGold)" stroke-width="1.8" stroke-linecap="round"/>
            </svg>',

            'trophy' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M6 3H18V7C18 10.3 15.3 13 12 13C8.7 13 6 10.3 6 7V3Z" fill="url(#luxGold)"/>
                <path d="M6 5H3C2.4 5 2 5.4 2 6C2 7.7 3.3 9 5 9H6V5Z" fill="url(#luxGold)"/>
                <path d="M18 5H21C21.6 5 22 5.4 22 6C22 7.7 20.7 9 19 9H18V5Z" fill="url(#luxGold)"/>
                <path d="M10 16H14V19H10V16Z" fill="url(#luxGold)"/>
                <rect x="7" y="19" width="10" height="2.5" rx="1" fill="url(#luxNavy)"/>
            </svg>',

            'users' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <circle cx="9" cy="8" r="3.5" fill="url(#luxOcean)"/>
                <path d="M3 18C3 15.2 5.7 13 9 13C12.3 13 15 15.2 15 18H3Z" fill="url(#luxOcean)"/>
                <circle cx="17" cy="8" r="2.5" fill="url(#luxAqua)"/>
                <path d="M15 17C15.5 15.3 17.1 14 19 14C20.9 14 22.5 15.3 23 17" stroke="url(#luxAqua)" stroke-width="1.5" stroke-linecap="round"/>
            </svg>',

            'diamond' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M6 3L2 9L12 21L22 9L18 3H6Z" fill="url(#luxAqua)" stroke="url(#luxOcean)" stroke-width="1.2"/>
                <path d="M2 9H22M12 21L7 9L10 3M12 21L17 9L14 3" stroke="#FFFFFF" stroke-width="1"/>
            </svg>',

            'document' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V8L14 2Z" fill="url(#luxNavy)" stroke="url(#luxOcean)" stroke-width="1.2"/>
                <path d="M14 2V8H20" fill="url(#luxAqua)"/>
                <line x1="8" y1="12" x2="16" y2="12" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"/>
                <line x1="8" y1="16" x2="14" y2="16" stroke="url(#luxGold)" stroke-width="1.5" stroke-linecap="round"/>
            </svg>',

            'pen' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M3 17.25V21H6.75L17.81 9.94L14.06 6.19L3 17.25Z" fill="url(#luxOcean)"/>
                <path d="M20.71 7.04C21.1 6.65 21.1 6.02 20.71 5.63L18.37 3.29C17.98 2.9 17.35 2.9 16.96 3.29L15.13 5.12L18.88 8.87L20.71 7.04Z" fill="url(#luxGold)"/>
            </svg>',

            'delivery' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <circle cx="12" cy="12" r="9" fill="url(#luxGreen)"/>
                <path d="M8 12L11 15L16 9" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>',

            'van' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M20 8H17V4H3C2.45 4 2 4.45 2 5V17C2 17.55 2.45 18 3 18H4.5C4.8 16.8 5.8 16 7 16C8.2 16 9.2 16.8 9.5 18H14.5C14.8 16.8 15.8 16 17 16C18.2 16 19.2 16.8 19.5 18H21C21.55 18 22 17.55 22 17V12L20 8Z" fill="url(#luxNavy)" stroke="url(#luxAqua)" stroke-width="1.2"/>
                <circle cx="7" cy="18" r="2" fill="url(#luxGold)"/>
                <circle cx="17" cy="18" r="2" fill="url(#luxGold)"/>
            </svg>',

            'family' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <circle cx="7" cy="7" r="2.5" fill="url(#luxOcean)"/>
                <path d="M3 17C3 14 5 12 7 12C9 12 11 14 11 17H3Z" fill="url(#luxOcean)"/>
                <circle cx="17" cy="7" r="2.5" fill="url(#luxGold)"/>
                <path d="M13 17C13 14 15 12 17 12C19 12 21 14 21 17H13Z" fill="url(#luxGold)"/>
                <circle cx="12" cy="12" r="1.5" fill="url(#luxAqua)"/>
                <path d="M9.5 18C9.5 16.2 10.8 15 12 15C13.2 15 14.5 16.2 14.5 18H9.5Z" fill="url(#luxAqua)"/>
            </svg>',

            'map' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <path d="M9 18L3 15V3L9 6L15 3L21 6V18L15 15L9 18Z" fill="url(#luxNavy)" stroke="url(#luxAqua)" stroke-width="1.2"/>
                <line x1="9" y1="6" x2="9" y2="18" stroke="url(#luxGold)" stroke-width="1.2"/>
                <line x1="15" y1="3" x2="15" y2="15" stroke="url(#luxGold)" stroke-width="1.2"/>
            </svg>',

            'search' => '<svg class="' . htmlspecialchars($class) . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                ' . $defs . '
                <circle cx="11" cy="11" r="7" stroke="url(#luxOcean)" stroke-width="2"/>
                <line x1="16.5" y1="16.5" x2="21.5" y2="21.5" stroke="url(#luxGold)" stroke-width="2.5" stroke-linecap="round"/>
            </svg>'
        ];

        return $icons[$name] ?? '<!-- icon: ' . htmlspecialchars($name) . ' -->';
    }
}
