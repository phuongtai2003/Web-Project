<div class = "container job-posting-container">
    <div class = "job-posting-header">
        <h1 id = "job-posting-title">
            Let's get you up and running
        </h1>
        <h3 id = "job-posting-subtitle">
            Your company can hire the best talents around the world via our website!
        </h3>
    </div>
    <div class = "job-posting-body">
        <div class = "posting-body-header">
            <h1 class = "posting-body-title">
                Let's advertise a job
            </h1>
            <h3 class = "posting-body-subtitle">
                Your company can enter the job information in the form below
            </h3>
        </div>
        <div class = "job-posting-form">
            <form method = "post">
                <h1>Job Advertisement Form</h1>
                <div class = "form-group">
                    <label for = "job-name-field">Job Name</label>
                    <input type = "text" id = "job-name-field" name = "job-name" placeholder = "Job Name" required>
                </div>
                <div class = "form-group">
                    <label for = "job-description-field">Job Description</label>
                    <textarea rows="10" id = "job-description-field" name = "job-description" placeholder = "Job Description" required></textarea>
                </div>
                <div class = "form-group">
                    <label for = "job-requirements-field">Job Requirements</label>
                    <textarea rows="10" id = "job-requirements-field" name = "job-requirements" placeholder = "Job Requirements" required></textarea>
                </div>
                <div class = "form-group">
                    <label for = "salary-range-option">Salary Range (Dollars per Year)</label>
                    <div id = "salary-range-option">
                        <input min="20000" max = "500000"type = "number" id = "min-salary-field" name = "min-salary" placeholder = "Min Salary" required>
                        <input min="20000" max = "500000" type = "number" id = "max-salary-field" name = "max-salary" placeholder = "Max Salary" required>
                    </div>
                </div>
                <div class = "form-group">
                    <label for = "job-candidates-field">Job Candidates Number</label>
                    <input min="1" type = "number" id = "job-candidates-field" name = "job-candidates-number" placeholder = "Job Candidates Number" required>
                </div>
                <div class = "form-group">
                    <label for = "job-exp-year-field">Year Of Experience Required</label>
                    <input min="0" type = "number" id = "job-exp-year-field" name = "job-exp-year" placeholder = "Job Experience Year" required>
                </div>
                <div class = "form-group">
                    <label for = "job-position-field">Job Position</label>
                    <input type = "text" id = "job-position-field" name = "job-position" placeholder = "Job Position" required>
                </div>
                <div class = "form-group">
                    <label for = "job-location-field">Job Location</label>
                    <input type = "text" id = "job-location-field" name = "job-location" placeholder = "Job Location" required>
                </div>
                <div class = "form-group">
                    <label for = "job-expiry-field">Job Expiry Date</label>
                    <input type = "date" id = "job-expiry-field" name = "job-expiry" placeholder = "Job Expiry Date" required>
                </div>
                <div class = "form-group">
                    <label for="job-location-type-field">Job Location Type</label>
                    <select id = "job-location-type-field" name = "job-location-type">
                        <option value="1">On-site</option>
                        <option value="2">Remote</option>
                        <option value="3">Combination</option>
                    </select>
                </div>
                <div class = "form-group">
                    <label for="job-employment-type-field">Form Of Employment</label>
                    <select id = "job-employment-type-field" name = "job-employment-type">
                        <option value="1">Full-Time</option>
                        <option value="2">Part-Time</option>
                        <option value="3">Internship</option>
                    </select>
                </div>
                <div class = "form-group">
                    <label for="job-experience-level-field">Experience Level</label>
                    <select id = "job-experience-level-field" name = "job-experience-level">
                        <option value="1">Junior</option>
                        <option value="2">Senior</option>
                        <option value="3">Entry - Level</option>
                    </select>
                </div>
                <div class = "form-group">
                    <label for="job-field-type-field">Job Field</label>
                    <select id = "job-field-type-field" name = "job-field-type">
                        <option value="1">IT</option>
                        <option value="2">Designer</option>
                        <option value="3">Finance</option>
                    </select>
                </div>
                <div class = "form-group">
                    <label for="job-skills-field">Job Skills</label>
                    <div id = "job-skills-field">
                        <div class = "job-skill-option">
                            <input type = "checkbox" name = "skills[]" value = "1" id="c-sharp">
                            <label for = "c-sharp">C#</label>
                        </div>
                        <div class = "job-skill-option">
                            <input type = "checkbox" name = "skills[]" value = "2" id="dot-net">
                            <label for = "dot-net">ASP .NET</label>
                        </div>
                        <div class = "job-skill-option">
                            <input type = "checkbox" name = "skills[]" value = "3" id="kotlin">
                            <label for = "kotlin">Kotlin</label>
                        </div>
                        <div class = "job-skill-option">
                            <input type = "checkbox" name = "skills[]" value = "4" id="java">
                            <label for = "java">Java</label>
                        </div>
                    </div>
                </div>
                <div class = "button-group">
                    <button type = "submit" class = "btn btn-fill">Create Job</button>
                    <button type = "reset" class = "btn btn-outline">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>