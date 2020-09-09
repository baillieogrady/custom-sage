module.exports = {
    theme: {
        container: {
            center: true,
            padding: {
                default: '1.5rem',
                lg: '2.75rem',
            },
        },
        screens: {
            'lg': '1024px',
            'xl': '1200px',
        },
        fontFamily: {
            'body': ['Segoe UI', 'Arial', 'sans-serif'],
            'display': ['Reman', 'Arial', 'sans-serif'],
            'averta': ['AvertaStd', 'Arial', 'sans-serif'],

        },
        extend: {
            colors: {
                'brand-primary': '#262c3a',
                'brand-primary-90': '#262c3ae6',
                'brand-secondary': '#e1a645',
                'brand-secondary-75': '#e1a645bf',
                'brand-navy': '#3d4b64',
                'brand-grey': '#ececec'
            },
            spacing: {
                'brand-8': '2.5rem',
                'brand-10': '2.75rem',
                'brand-12': '3.125rem',
                'brand-14': '3.75rem',
                'brand-20': '4.375rem',
                'brand-24': '6.25rem',
                'brand-28': '7rem',
                'brand-40': '9.375rem'
            },
            fontSize: {
                'brand-display': '5.625rem',
                'brand-h2': '2.5rem',
                'brand-h1': '2.75rem',
                'brand-6xl': '3.75rem',
                'brand-7xl': '5rem'
            },
            lineHeight: {
                'brand-tight': '1.2'
            },
            inset: {
                'brand-1/3': '35%',
                'brand-1/2': '50%',
                '-brand-2': '-0.3125rem',
                'brand-2': '0.3125rem',
                '-brand-3': '-0.75rem',
                'brand-3': '0.75rem',
                'brand-4': '1rem',
                '-brand-4': '-1rem',
                'brand-5': '1.25rem',
                '-brand-24': '-4.8rem',
                '-brand-8': '-2rem',
                'brand-10': '2.5rem',
                '-brand-12': '-2.75rem',
                'brand-40': '9.375rem',
            },
            height: {
                'brand-8': '2.125rem',
                'brand-96': '24rem',
                'brand-140': '34rem',
                'brand-160': '40rem',
            },
            width: {
                'brand-48': '12.5rem',
                'brand-76': '19rem',
                'brand-128': '32rem',
                'brand-almost-full': '98%',
            },
            translate: {
                '-36': '-36%'
            },
            borderWidth: {
                '12': '12px',
                '16': '16px'
            }
        }
    },
    variants: {},
    plugins: [],
    purge: false,
}
