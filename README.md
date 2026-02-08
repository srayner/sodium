# Sodium 🧂

Sodium is a generic application for managing cleaning and maintenance tasks across structured environments. It is designed to track the condition of locations over time by combining scheduled tasks, hierarchical areas, and gradual degradation when maintenance is missed.

The focus of the application is not only task completion, but understanding the overall _state_ of an environment and identifying areas that require attention.

---

## Description

Sodium models an environment as a hierarchy of locations and areas. Maintenance tasks are associated with these areas and are expected to be performed on a defined schedule. When tasks are completed regularly, areas remain in good condition. When tasks are missed, areas degrade over time, reflecting neglect or lack of maintenance.

The system is intentionally domain-agnostic and can be adapted to many types of environments without hard-coded assumptions.

---

## Core Concepts

### Locations and Areas

- Locations represent top-level environments
- Each location may contain multiple areas
- Areas may be nested to form a hierarchy
- Areas have a **status** representing their current condition

### Area Status

- Status indicates how well an area is being maintained
- Status values are configurable (e.g. healthy, warning, degraded)
- Area status changes over time based on maintenance activity

### Tasks

- Tasks are associated with areas
- Each task has a defined schedule
- Tasks represent recurring maintenance or upkeep actions
- Task completion positively affects area condition

### Degradation

- Areas degrade automatically when scheduled tasks are missed
- Degradation is gradual, not binary
- Regular maintenance prevents or reverses degradation

---

## Technology Stack

- Node.js
- npm
- Prisma (ORM)
- Database: SQLite / PostgreSQL (configurable)

---

## Getting Started

### Prerequisites

- Node.js (v18+ recommended)
- npm
- A supported database

---

## Developer Setup

### Clone the Repository

```bash
git clone https://github.com/srayner/sodium.git sodium
cd sodium
```

### Install dependencies

```bash
npm install
```

### Create a database and database user

```sql
CREATE USER sodium WITH PASSWORD 'your_password';
ALTER USER sodium CREATEDB;
CREATE DATABASE sodium OWNER sodium;
```

### Create an .env.local file.

### Create prisma client and initialise database

```bash
npm run db:generate
npm run db:migrate
npm run db:fixtures
```

### Start the dev server

```bash
npm run dev
```
