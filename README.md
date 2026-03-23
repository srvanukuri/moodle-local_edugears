# EduGears AI LTI for Moodle

Add AI-powered educational tools to your Moodle LMS via LTI 1.3 — no custom code required.

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

- Moodle 4.0 or later (Moodle 4.5+ recommended)
- Site administrator access

## Installation

1. Install this plugin via the Moodle Plugins directory or by extracting the ZIP into `/local/edugears/`
2. Go to **Site Administration → Notifications** to complete the installation
3. Navigate to **Site Administration → Plugins → Activity modules → External tool → Manage tools**
4. Paste the registration URL shown in the plugin settings and click **Add LTI Advantage**
5. Activate the tool and set it to appear in the activity chooser

The registration URL is: `https://lti-api.edugears.ai/lti/register`

## After Installation

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
