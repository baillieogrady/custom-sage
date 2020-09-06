module.exports = {
    theme: {
        container: {
            center: true,
            padding: {
                default: '0',
            },
        },
        screens: {
            'xl': '1200px',
        },
        fontFamily: {
            'body': ['Segoe UI', 'Arial', 'sans-serif'],
        },
        extend: {
            colors: {
                'brand-primary': '#262c3a',
                'brand-primary-90': '#262c3ae6',
                'brand-secondary': '#e1a645',
                'brand-navy': '#3d4b64'

            },
            spacing: {
                'brand-8': '2.5rem',
                'brand-10': '2.75rem',
                'brand-12': '3.125rem',
                'brand-14': '3.75rem',
                'brand-20': '4.375rem',
                'brand-40': '9.375rem'
            },
            fontSize: {
                'brand-display': '5.625rem',
                'brand-h1': '2.75rem',
                'brand-h2': '2.5rem',
                'brand-7xl': '5rem'
            },
            lineHeight: {
                'brand-tight': '1.2'
            },
            inset: {
                'brand-1/2': '50%',
                '-brand-2': '-0.3125rem',
                'brand-2': '0.3125rem',
                '-brand-3': '-0.75rem',
                'brand-3': '0.75rem',
                '-brand-4': '-1rem',
                'brand-5': '1.25rem',
                '-brand-24': '-4.8rem',
                '-brand-12': '-2.75rem'
            },
            height: {
                'brand-160': '40rem',
                'brand-140': '34rem'
            },
            width: {
                'brand-128': '32rem'
            },
        }
    },
    variants: {},
    plugins: [],
    purge: false,
}
