# EduGears AI LTI for Moodle

Add AI-powered educational tools to your Moodle LMS via LTI 1.3 — no custom code required.

## Setup Video

Watch the setup video for a step-by-step walkthrough: [EduGears AI Moodle Setup](https://youtu.be/H-bZwDy_mpA)

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

- **AI Course Modules** — Upload a syllabus and AI decomposes it into structured lessons, generates all resources per lesson, and exports as SCORM 1.2
- **AI Question Generator** — Generate quiz questions from any topic with 9 question types
- **AI Slides Generator** — Create presentations instantly from any topic or document
- **AI Grading** — Intelligent assessment with detailed feedback and automatic grade passback
- **AI Tutor** — 24/7 personalized student support with multiple learning modes
- **AI Study Guide Generator** — Comprehensive study materials and revision guides on demand
- **AI Worksheet Generator** — Practice worksheets tailored to any topic or grade level
- **AI Lesson Planner** — Structured lesson plans with objectives, activities, and assessments
- **AI Assistant** — Your teaching co-pilot for lesson prep and content strategy

## Requirements

- Moodle 3.10 or later for LTI 1.3 dynamic registration (Moodle 4.0+ for plugin installation)
- Site administrator access

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

## Support

- Website: https://lti.edugears.ai
- Email: support@edugears.ai
- Setup Guide: https://lti.edugears.ai/setup

## License

This plugin is licensed under the GNU GPL v3 or later.
