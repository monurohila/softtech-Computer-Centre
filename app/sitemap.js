const routes=['','about-us','certification-courses','computer-courses','results','gallery','admissions','blog','contact-us','privacy-policy'];
export default function sitemap(){return routes.map(r=>({url:`https://softech-demo.vercel.app/${r}`,lastModified:new Date()}))}
