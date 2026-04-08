# EduGears AI LTI for Moodle

Add AI-powered educational tools to your Moodle LMS via LTI 1.3 — no custom code required.

## Setup Video

Watch the setup video for a step-by-step walkthrough: [EduGears AI Moodle Setup](https://youtu.be/RWoXlCUSHMw)

## Quick Setup in Under 3 Minutes (No Plugin Required)

You do **not** need to install this plugin to use EduGears AI. Just use Moodle's built-in External tool settings — **no plugin installation, no Moodle upgrades, no database changes**:

1. Go to **Site Administration → Plugins → Activity modules → External tool → Manage tools**
2. Paste `https://lti-api.edugears.ai/lti/register` in the Tool URL field
3. Click **Add LTI Advantage**
4. Click **Activate** on the EduGears AI tool
5. Done! Instructors can now add EduGears AI to their courses

This method works on any Moodle version that supports LTI 1.3 (Moodle 3.10+) and requires zero changes to your Moodle site.

For detailed instructions with screenshots, visit: **https://lti.edugears.ai/setup**

## What Does This Plugin Do?

This optional plugin adds a settings page under Site Administration → Plugins → Local plugins → EduGears AI LTI that displays the registration URL and a direct link to Manage tools for convenience. It does **not** create any database tables or modify your Moodle database schema.

## Features

- **AI Course Modules** — Upload a syllabus and the AI decomposes it into structured lessons, generates all resources per lesson, and exports them as SCORM 1.2. When shared, students can view questions as a quiz, along with lessons, slides, study guides, and worksheets.
- **AI Question Generator** — Generate quiz questions from any topic with multiple question types (multiple choice, fill-in-the-blank, matching, and more). Instructors can share questions with students as a quiz or as practice questions. Practice mode shows hints and solutions and includes a flashcard view.
- **AI Slides Generator** — Create presentation slides from any topic instantly. When shared, students have view-only access to slides.
- **AI Grading** — Intelligent assessment with detailed feedback and automatic grade passback to your Moodle gradebook. Upload handwritten or typed answer sheets for AI grading based on your rubrics.
- **AI Tutor** — 24/7 personalized learning support for students with Socratic tutoring mode. Includes 4 teaching roles: Tutor, Mentor, Socrates, and Coach.
- **AI Study Guide Generator** — Comprehensive study materials and revision guides on demand.
- **AI Worksheet Generator** — Practice worksheets and activities tailored to any topic or grade level. Share them with students directly. The student view does not show the answer key.
- **AI Lesson Planner** — Structured lesson plans from topics and learning objectives in seconds. When shared, the student view does not display lesson plans.
- **AI Assistant** — Your AI teaching co-pilot for instructors. This tool is available to instructors only.
- **Curriculum Intelligence** — Upload course materials (PDF, DOCX, PPTX) and every AI tool automatically uses them to generate more relevant, course-aligned content. This tool is intended for instructors only.

## Requirements

- Moodle 3.10 or later for LTI 1.3 dynamic registration (Moodle 4.0+ for plugin installation)
- Site administrator access
- **Your Moodle must be publicly accessible** (i.e., reachable from the internet). Registration will not work if your Moodle is running on `localhost` or a private network, because EduGears AI (a cloud service) needs to connect to your Moodle during setup.

**Testing locally?** You can use a tunneling tool like [ngrok](https://ngrok.com) to temporarily expose your local Moodle to the internet. Run `ngrok http 80` (or your Moodle port), then use the generated public URL as your Moodle site address before registering.

## Plugin Installation (Optional)

If you prefer the convenience of a settings page:

1. Install this plugin via the Moodle Plugins directory or by extracting the ZIP into `/local/edugears/`
2. Go to **Site Administration → Notifications** to complete the installation
3. The plugin settings page will guide you through the remaining setup

**Note:** The "Upgrade Moodle database" step during installation is Moodle's standard plugin registration process. This plugin does not create any database tables or modify existing ones.

## After Setup

Instructors can add EduGears AI tools to any course:

1. Open a course and enable **Edit mode**
2. Click **+ Add an activity or resource**
3. Select **EduGears AI** from the activity chooser
4. Pick an AI tool from the content picker
5. Save — students can launch immediately with no separate login

## Privacy & Security

- LTI 1.3 Advantage with OAuth 2.0 and signed JWTs
- FERPA and COPPA compliant
- No LMS credentials stored
- Student content is never used to train AI models
- Only minimal data (name, email, course context) is shared via standard LTI claims

## Anonymous Adoption Telemetry

On install and uninstall, the plugin sends a single small POST to
`https://lti-api.edugears.ai/api/plugin/telemetry` so we can measure how
many sites install the plugin versus complete LTI registration. The
payload contains only:

- A SHA-256 hash of your site identifier + wwwroot (non-reversible)
- The plugin version, Moodle version, and PHP version

No personal data, no site URL, no user info, no IP-derived data is sent.
The request has a 2-second timeout and any failure is silently ignored —
it will never block install or uninstall.

To opt out, add the following line to your `config.php`:

```php
$CFG->local_edugears_telemetry = false;
```

## Support

- Website: https://lti.edugears.ai
- YouTube Channel: https://youtube.com/@EduGearsAI_LTI
- Email: support@edugears.ai
- Setup Guide: https://lti.edugears.ai/setup

## License

This plugin is licensed under the GNU GPL v3 or later.
