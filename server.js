const express = require('express');
const path = require('path');
const app = express();
const PORT = process.env.PORT || 3000;

app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, 'views'));
app.use(express.static(path.join(__dirname, 'public')));
app.use(express.urlencoded({ extended: true }));

const nav = [
  ['/', 'Home'], ['/about-us', 'About Us'], ['/certification-courses', 'Certification Courses'],
  ['/computer-courses', 'Computer Courses'], ['/results', 'Results'], ['/gallery', 'Gallery'],
  ['/admissions', 'Admissions'], ['/blog', 'Blog'], ['/contact-us', 'Contact Us']
];
const courses = [
  ['Basic Computer','3 Months','💻'], ['Advanced Excel','2 Months','📊'], ['Tally Prime with GST','2 Months','✍️'],
  ['Graphic Designing','2 Months','Ps Ai'], ['Web Designing','3 Months','🌐'], ['Python Programming','3 Months','🐍']
];
const pages = {
  '/about-us': ['About Softech Computer Centre', 'Industry-focused computer education in Ganaur with practical training, modern lab facilities and career guidance.'],
  '/certification-courses': ['Certification Courses', 'Govt. and industry-recognized certificate programs including CCC, DCA, ADCA, Tally Prime, Advanced Excel, Web Designing and Digital Marketing.'],
  '/computer-courses': ['Computer Courses', 'Explore basic to advanced computer courses designed for students, job seekers, business owners and professionals.'],
  '/results': ['Results', 'Students can check latest results by roll number, registration number or course batch.'],
  '/gallery': ['Gallery', 'Classroom, lab, event, workshop and certificate distribution memories from Softech Computer Centre.'],
  '/admissions': ['Admissions', 'Admissions open for 2025. Apply online or contact our counsellor for course selection and fees.'],
  '/blog': ['Blog', 'Computer tips, career guidance, exam updates and technology articles for students.'],
  '/contact-us': ['Contact Us', 'Visit Softech Computer Centre, Ganaur or contact us by phone, email and WhatsApp.']
};
function render(res, view, data={}){ res.render(view, { nav, courses, path: data.path || '/', ...data }); }
app.get('/', (req,res)=>render(res,'home',{path:'/'}));
Object.keys(pages).forEach(route=>app.get(route,(req,res)=>render(res,'page',{path:route,title:pages[route][0],text:pages[route][1]})));
app.post('/admission-submit',(req,res)=>res.redirect('/admissions?success=1'));
app.listen(PORT, ()=>console.log(`Softech site running at http://localhost:${PORT}`));
