import './globals.css';
export const metadata = {metadataBase:new URL('https://softech-demo.vercel.app'),title:{default:'Softech Computer Centre Ganaur',template:'%s | Softech Computer Centre'},description:'Responsive demo website for Softech Computer Centre, Ganaur with courses, certification, results, admissions and contact pages.',openGraph:{title:'Softech Computer Centre Ganaur',description:'Computer learning centre demo website',type:'website'},};
export default function RootLayout({children}){return <html lang="en"><body>{children}</body></html>}
