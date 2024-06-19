---
title: "Career Pathways for Data Analysts: SQL-Based Salary and Skill Insights"
date: "19 June, 2024"
---
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