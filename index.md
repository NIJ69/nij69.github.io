---
layout: default
---


<!-- Introduction -->
# Data Analyst & Physics Lover

I am a passionate data analyst with a background in physics, driven by a fascination with uncovering hidden patterns and extracting meaningful insights from data. I leverage my analytical skills and scientific knowledge to tackle complex problems, develop data-driven solutions, and create impactful visualizations.

This website showcases my work, including data analysis projects, research publications, and technical skills. I am eager to collaborate with individuals and organizations seeking to unlock the power of data and gain a deeper understanding of their world.


<!-- Educational information -->
## Education

- Studied Physics at the [University of Dhaka](https://www.du.ac.bd/) in Bangladesh.

- Studying Physics at [Marmara University](http://fzk.fen.marmara.edu.tr/en/) with the prestigious full-ride [Türkiye Bursları](https://www.turkiyeburslari.gov.tr/) (Turkish Scholarships).


<!-- Projects -->
## Projects

{% for project in site.projects %}
- [{{ project.title }}]({{ project.url | relative_url }})
{% endfor %}

<!-- Acquired certifications -->
## Achievements

{% include badges.html %}

<!-- Publications: blog, tutorial, papers, learning resources, etc. -->
## Publications

### [Blog](/blog/)

{% for post in site.posts %}
- [{{ post.title }}]({{ post.url }})
{% endfor %}