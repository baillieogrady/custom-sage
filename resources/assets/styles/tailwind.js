module.exports = {
    theme: {
        // prefix: 'tw-',
        container: {
            center: true,
            padding: {
                default: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '8rem',
            },
        },
        // fontFamily: {
        //     'body': ['DIN', 'Arial', 'sans-serif'],
        // },
        extend: {
            colors: {
                'brand-blue': '#239FC6'
            },
            inset: {
                'half': '50%',
                'full': '100%'
            }
        }
    },
    variants: {},
    plugins: [],
    purge: false,
}
