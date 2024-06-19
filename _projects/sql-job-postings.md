---
title: "Career Pathways for Data Analysts: SQL-Based Salary and Skill Insights"
date: "19 June, 2024"
---

## Introduction
In today's data-driven world, the field of data analytics is booming, with a rapidly growing demand for skilled professionals. This project aims to analyze a dataset of job postings to uncover valuable insights about the most in-demand skills, top-paying jobs, leading companies, and emerging trends in the data analytics job market.

## Objectives
As an aspiring Data Analyst, my goal for this project is to gain valuable insights into the Data Analytics job market. By analyzing job postings, I aim to understand the skill sets I should focus on, identify companies that offer higher compensation, and recognize the roles that are in high demand, especially for remote work opportunities. Based on these criteria, this project seeks to answer the following questions:

1. **What are the top-paying jobs for Data Analyst role?**
    - Identifying roles within the data analytics field that offer the highest salaries.
2. **What are the skills required for these top-paying jobs?**
    - Determining the key skills and qualifications that are essential for securing high-paying positions in data analytics.
3. **What are the most in-demand and optimal skills for my role?**
    - Highlighting the skills that are currently most sought after in the job market and those that provide the best career opportunities for Data Analysts.

## Methodology
### Data Source
### Data Cleaning and Processing
### Data Analysis and Findings
<!--
------------------------------------------------------------
SQL Code 01
------------------------------------------------------------
-->
```sql
-- What are the top paying jobs for "Data Analyst"?
SELECT
    j.job_title,
    c.name AS company_name, -- Company name
    j.salary_year_avg
FROM
    job_postings_fact AS j
LEFT JOIN
    company_dim AS c        -- Company data table
USING(company_id)
WHERE
    job_title_short = "Data Analyst" AND job_location = "Anywhere"
ORDER BY 3 DESC
LIMIT 10;
```

<!--
------------------------------------------------------------
Result table for SQL Code 01
------------------------------------------------------------
-->
<div class="df">
<div class="df_before" markdown="1">
<p class="table_caption">Top Paying Jobs</p>

|    | job_title                                       | company_name                                    |   salary_year_avg |
|----|-------------------------------------------------|-----------------------------------------|-------------------|
|  0 | Data Analyst                                    | Mantys                                  |            650000 |
|  1 | Director of Analytics                           | Meta                                    |            336500 |
|  2 | Associate Director- Data Insights               | AT&T                                    |            255830 |
|  3 | Data Analyst, Marketing                         | Pinterest Job Advertisements            |            232423 |
|  4 | Data Analyst (Hybrid/Remote)                    | Uclahealthcareers                       |            217000 |
|  5 | Principal Data Analyst (Remote)                 | SmartAsset                              |            205000 |
|  6 | Director, Data Analyst - HYBRID                 | Inclusively                             |            189309 |
|  7 | Principal Data Analyst, AV Performance Analysis | Motional                                |            189000 |
|  8 | Principal Data Analyst                          | SmartAsset                              |            186000 |
|  9 | ERM Data Analyst                                | Get It Recruit - Information Technology |            184000 |

</div>
</div>

<!--
------------------------------------------------------------
SQL Code 01
------------------------------------------------------------
-->
```sql
-- What are the skills required for these top-paying jobs?
WITH top_paying_jobs AS (
    SELECT
        j.job_id,
        j.job_title,
        c.name AS company_name,
        j.salary_year_avg
    FROM
        job_postings_fact AS j
    LEFT JOIN company_dim AS c
    USING(company_id)
    WHERE
        job_title_short = "Data Analyst" AND job_location = "Anywhere"
    ORDER BY j.salary_year_avg DESC
    LIMIT 10
)
SELECT
    t.company_name,
    t.job_title,
    s.skills
FROM top_paying_jobs AS t
INNER JOIN skills_job_dim AS sj ON t.job_id = sj.job_id
INNER JOIN skills_dim AS s ON sj.skill_id = s.skill_id
ORDER BY t.salary_year_avg DESC;
```

![Most required skills](/assets/images/project_sql-job-postings/skills_required_for_data_analytics.png)

<div class="df">
<div class="df_before" markdown="1">
<p class="table_caption">In-demand Skills for Data Analytics</p>

|    | skills   |   demand_count | visuals              |
|----|:----------|----------------|:---------------------|
|  0 | sql      |          92628 | #################### |
|  1 | excel    |          67031 | ##############       |
|  2 | python   |          57326 | ############         |
|  3 | tableau  |          46554 | ##########           |
|  4 | power bi |          39468 | #########            |
|  5 | r        |          30075 | ######               |
|  6 | sas      |          28068 | ######               |

</div>
</div>

## Acknowledgement
## References
### 1. Dataset
### 2. Tools and Technologies
### 3. Libraries and Resources
### 4. Online Resources